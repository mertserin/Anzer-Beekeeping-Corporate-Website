<?php
try {
  $vt = new PDO("mysql:host=localhost;dbname=anzeraricilik;charset=utf8", "root", "");
} catch (Exception $e) {
  echo 'Hata:'.$e;
}

 ?>
