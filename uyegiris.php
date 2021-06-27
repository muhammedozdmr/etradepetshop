<!doctype html>
<html>
	
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
	<link rel="stylesheet" type="text/css" href="giris.css">
</head>

<body>
<center>

<form style="background:rgba($form-bg,.9);
  padding: 40px;
  max-width:600px;
  margin:40px auto;
  border-radius:$br;
  box-shadow:0 4px 10px 4px rgba($form-bg,.3);" action="uyeol.php" method="post">
	<h2 style="text-align:center;
  color:$white;
  font-weight:$thin;
  margin:0 0 35px;">GİRİŞ YAP</h2>
<p style="text-align: left">Kullanıcı Adı:</p> :<input style="width: 80%; height: 25px;float: left" type="text" name="kullaniciadi"><br>
<p style="text-align: left">Şifre:</p><input style="width: 80%;float: left; height: 25px;text-align: left" type="password" name="sifre"><br><br><br>
	<img src="guvenlikresmi.php"><input type="text" name="kod" maxlength="6" size="7">
	
	 
<input style="width: 20%;height: 35px;float: left" type="submit" name="basla" value="GİRİŞ"><a href="index.php" style="float: right;text-decoration: none;font-size: 20px;"><p>Kayıt Ol </p></a><br>
</form>
</center>
<?php
ob_start();
session_start();
if(!empty($_POST['kullaniciadi']) && !empty($_POST['sifre'])){
	if($_POST["kod"]==$_SESSION["guv"]){
	$db=new mysqli("localhost","root","","test");
	$kayit = mysqli_prepare($db,'SELECT * FROM uyeler WHERE kullaniciadi=? AND sifre=?');
	if($kayit==false){
		die('sorgu hatası:'. $db->error);
	}
	$kayit->bind_param('ss',$_POST['kullaniciadi'],$_POST['sifre']);
    $kayit->execute();
	$sonuc = $kayit->get_result();

	if($sonuc->num_rows) {
 
		$sifre=md5($_POST['sifre']) . ":" .md5(md5($_POST['sifre']) . $key);
		$kullaniciadi= $_POST['kullaniciadi'] . ":" . md5($_POST['kullaniciadi'] . $key);
		
		if($_POST['hatirla']){
			
			setcookie("uye",$sifre . ':' . $kullaniciadi, strtotime('+30 days'));
		}
		
		$_SESSION['uyeler'] = serialize($sonuc->fetch_array());
		header('Location: index.php');

	} else {
		$mesaj = '<center><h4>Eposta veya Şifre Hatalı!</center></h4>';
	}
	}
}
?>
	
	
</body>
</html>