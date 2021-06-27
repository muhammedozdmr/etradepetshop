<?php
require_once("baglan.php");
?>
<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Proje</title>
</head>

<body>
    <?php
    if(isset($_SESSION["Kullanıcı"]))
    {
        if(isset($_SESSION["Durum"]==1))
        {
            echo "Üye Tablosu İşlemleri İçin Lütfen Buraya <a href='uyetablo.php'>Tıklayınız</a>.";
        }
        else
        {
            echo "DİKKAT !";
            echo "Bu sayfaya erişiminiz bulunmamaktadır.";
            echo "Ana Sayfaya Dönmek İçin Lütfen Buraya <a href='index.php'>Tıklayınız</a>.";
        }
    }
    else
    {
        echo "BÖYLE BİR KULLANICI BULUNAMADI";
        echo echo "Üyelik Sayfasına Dönmek İçin Lütfen Buraya <a href='uyeol.php'>Tıklayınız</a>.";
        echo "Ana Sayfaya Dönmek İçin Lütfen Buraya <a href='index.php'>Tıklayınız</a>.";
    }
    ?>
</body>
</html>
         