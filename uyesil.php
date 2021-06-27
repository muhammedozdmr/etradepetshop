<?php

require_once("baglan.php");

$GelenKullaniciAdi = $_POST["kullaniciadi"];

$delete = mysql_query("DELETE FROM uyeler WHERE kullaniciadi= '$GelenKullaniciAdi'");

if ($delete)
{
    echo "Silme İşlemi Başarılı Bir Şekilde Gerçekleştirildi";
}
else
{
    echo "Hata";
}
?>