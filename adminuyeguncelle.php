<?php
require_once("baglan.php");
?>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Proje</title>
</head>
<body>
<form action="adminuyeguncellesonuc.php" method="post">
<table width="1000" height="600" align="center" border="0" cellpadding="0" cellspacing="0">
    <tr>
			<td colspan="5" height="100" bgcolor="#CCCCCC">ÜST ALAN (HEADER ALANI)</td>
		</tr>
		<tr>
			<td colspan="5" height="20">&nbsp;</td>
		</tr>
		<tr>
			<td width="200" valign="center" height="400" bgcolor="#AAAAAA"><a href="index.php" style="text-decoration: none; color: white;">Ana Sayfa</a></td>
			<td width="10" height="400">&nbsp;</td>
			<td width="480" height="400" bgcolor="#CCCCCC">İÇERİK ALANI (MAIN ALANI)</td>
			<td width="10" height="400">&nbsp;</td>
			<td width="300" height="400" valign="top">
				<form action="uyesilsonuc.php" method="post">
					<table width="300" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td colspan="3" height="30" bgcolor="#990000" style="color:#FFFFFF;">&nbsp;Üye Güncelleme Alanı</td>
						</tr>
                        <tr>
							<td height="30" width="100">&nbsp;Adı Soyadı</td>
							<td height="30" width="10">:</td>
							<td height="30" width="190"><input type="text" name="adsoyad" style="width: 98%;"></td>
						</tr>
						<tr>
							<td height="30" width="100">&nbsp;Kullanıcı Adı</td>
							<td height="30" width="10">:</td>
							<td height="30" width="190"><input type="text" name="kullaniciadi" style="width: 98%;"></td>
						</tr>
						<tr>
							<td height="30" width="100">&nbsp;E-Mail Adresi</td>
							<td height="30" width="10">:</td>
							<td height="30" width="190"><input type="email" name="mail" style="width: 98%;"></td>
						</tr>
                        <tr>
							<td height="30" width="100">&nbsp;Şifre</td>
							<td height="30" width="10">:</td>
							<td height="30" width="190"><input type="password" name="sifre" style="width: 98%;"></td>
						</tr>
                        <tr>
                            <td height="30" width="100">&nbsp;Durum</td>
				            <td height="30" width="10">:</td>
                            <td height="30" width="190">
                                <select name="durum" style="width: 102%;">
                                    <option value=1>Admin</option>
                                    <option value=0>User</option>
                                </select> 
                            </td>
				        </tr>
						<tr>
							<td height="30" width="100">&nbsp;</td>
							<td height="30" width="10">&nbsp;</td>
							<td height="30" width="190" align="right"><input type="submit" value="Üye Güncelle"></td>
						</tr>
					</table>
				</form>
			</td>
		</tr>
		<tr>
			<td colspan="5" height="20">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="5" height="100" bgcolor="#CCCCCC">ALT ALAN (FOOTER ALANI)</td>
		</tr>
</table>
</form>
</body>
</html>
<?php
}
$VeritabaniBaglantisi	=	null;
?>