 <!doctype html>
<html>
	
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
	<link rel="stylesheet" type="text/css" href="giris.css">
</head>

<body>
	<td>
	<tr>
		<div style="width: 40%"></div>
	<form style="background:rgba($form-bg,.9);
  padding: 40px;
  max-width:600px;
  margin:40px auto;
  border-radius:$br;
  box-shadow:0 4px 10px 4px rgba($form-bg,.3);"  method="post" action="uyegiris.php"><br>
		 <h2 style="text-align:center;
  color:$white;
  font-weight:$thin;
  margin:0 0 40px;">KAYIT OL</h2>
	<p>İsim Soyisim  :</p> <input  style="width: 100%; height: 25px" type="text" name="adsoyad"><br>
	<p>Kullanıcı Adı :</p> <input style="width: 100%;height: 25px" type="text" name="kullaniciadi"><br>
	<p>Şifre   :</p> <input style="width: 100%;height: 25px" type="password" name="sifre"><br>
	<p>Mail    :</p><input style="width: 100%;height: 25px" type="text" name="mail">
	<p>Durum    :</p><input style="width: 100%;height: 25px" type="text" name="durum"><br><br><br>
	<input style="width: 20%;height: 35px;" type="submit" name="gonder" value="Kayıt Ol"><a href="uyeol.php" style="float: right;text-decoration: none;font-size: 20px;"><p>Zaten üyeyim </p></a><br>
		
	
		
		
	</form>
	</tr>
		</td>
	<?php
	
	
	error_reporting(0);
	$adsoyad=$_POST['adsoyad'];
	$kullaniciadi=$_POST['kullaniciadi'];
	$sifre=$_POST['sifre'];
	$mail=$_POST['mail'];
	$durum=$_POST['durum'];
	
	if($adsoyad==""||$kullaniciadi==""||$sifre==""||$mail==""||$durum==""){
		echo "<style='margin-left:45%;margin-top:18%'Lütfen Boş Yerleri Doldurunuz";
		}
	else
	
	$db=new mysqli("localhost","root","","test");
	$kyt=$db->prepare("INSERT INTO kayit VALUES (NULL,?,?,?,?,?)");
	$kyt->bind_param("ssss",$adsoyad,$kullaniciadi,$sifre,$mail,$durum);
	$kyt->execute();
	$db->close();
	header("refresh:;url=uyegiris.php")
	
	
	
	?>
	
	
	
	
	
</body>
</html>