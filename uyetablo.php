<?php 
require_once("baglan.php"); 
?>
<table>
    <tr>
        <td>�ye Ad�</td>
        <td>�ye Parolas�</td>
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
            
            echo "�yelik Silme ��lemleri ��in L�tfen Buraya <a href='adminuyesil.php'>T�klay�n�z</a>.";
            
            echo "Uyelik Guncelleme ��lemleri ��in L�tfen Buraya <a href='adminuyeguncelle.php'>T�klay�n�z</a>.";
    ?>
</table>