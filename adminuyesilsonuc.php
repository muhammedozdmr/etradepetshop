<?php
require_once("baglan.php");
?>
<?php
$SilinenUyeAdSoyad = $_POST["adsoyad"];
$delete = mysql_query("DELETE FROM uyeler WHERE kullaniciadi= '$SilinenUyeAdSoyad'");

if ($delete)
{
    echo "Silme İşlemi Başarılı Bir Şekilde Gerçekleştirildi";
    echo "Başka Bir Üyelik Silme İşlemi İçin Lütfen Buraya <a href='adminuyesil.php'>Tıklayınız</a>.";
}
else
{
    echo "Hata";
}
?>