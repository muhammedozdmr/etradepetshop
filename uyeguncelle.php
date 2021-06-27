<?php

require_once("baglan.php");

$GelenKullaniciAdi = $_POST["kullaniciadi"];
$YeniSifre = $_POST["sifre"];
$YeniMail = $_POST["mail"];

$update = mysql_query("UPDATE uyeler SET parola = '$YeniSifre' mail WHERE kullaniciadi= '$GelenKullaniciAdi'");

if ($update)
{
    echo "Güncelleme Islemi Basarili Bir Sekilde Gerçeklestirildi";
}
else
{
    echo "Hata";
}
?>