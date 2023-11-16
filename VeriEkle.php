<?php
include 'baglanti.php';
$urun_adi=$_POST['urun_adi'];
$urun_adeti=$_POST['urun_adeti'];
$urun_fiyati=$_POST['urun_fiyati'];

$sorgu = $vt->prepare("INSERT INTO urunler SET
urun_adi = ?,
urun_adeti = ?,
urun_fiyati = ?");
$ekle = $sorgu->execute(array(
     $urun_adi, $urun_adeti, $urun_fiyati
));
if ( $sorgu ){
    $son_idi = $vt->lastInsertId();
    header("Location:admin.php");
}
else{
  echo "Bir hata oluştu.";
}
 ?>
