<?php
require_once("baglan.php");
?>
<?php
$GuncellenenUyeAdSoyad = $_POST["adsoyad"];
$UyeKullaniciAdi = $_POST["kullaniciadi"];
$GuncellenenUyeSifre = $_POST["sifre"];
$GuncellenenUyeMail = $_POST["mail"];
$GuncellenenUyeDurum = $_POST["durum"];
$update = mysql_query("UPDATE uyeler SET adsoyad = '$GuncellenenUyeAdSoyad', sifre = '$GuncellenenSifre', mail = '$GuncellenenUyeMail', durum = '$GuncellenenUyeDurum' WHERE kullaniciadi= '$KullaniciAdi'");

if ($delete)
{
    echo "Güncelleme İşlemi Başarılı Bir Şekilde Gerçekleştirildi";
    echo "Başka Bir Üyelik Güncelleme İşlemi İçin Lütfen Buraya <a href='adminuyeguncelle.php'>Tıklayınız</a>.";
}
else
{
    echo "Hata";
}
?>