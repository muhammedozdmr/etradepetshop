<?php 
require_once("baglan.php"); 
?>
<table>
    <tr>
        <td>Üye Adý</td>
        <td>Üye Parolasý</td>
    </tr>
    <?php
        $verileriCek = mysql_query("SELECT * FROM uyeler");
        while ($b=mysql_fetch_array($verileriCek))
        {
            $uyead = $b['adsoyad'];
            $uyekullaniciadi = $b['kullaniciadi'];
            $uyesifre = $b['sifre'];
            $uyemail = $b['mail'];
            $uyedurumu = $b["durum"];

            echo "<tr>
            <td>$uyead</td>
            <td>$uyekullaniciadi</td>
            <td>$uyesifre</td>
            <td>$uyemail</td>
            <td>$uyedurumu</td>
            </tr>"; 
            
            echo "Üyelik Silme Ýþlemleri Ýçin Lütfen Buraya <a href='adminuyesil.php'>Týklayýnýz</a>.";
            
            echo "Uyelik Guncelleme Ýþlemleri Ýçin Lütfen Buraya <a href='adminuyeguncelle.php'>Týklayýnýz</a>.";
    ?>
</table>