<?php include 'ustkisim.php'; ?>
<div class="galeribilgi3">
  <div class="solbilgi">
    <h1>İLETİŞİM</h1><br>
    <p><b>Anzer Arıcılık</b></p>
    <p class="fiyat"><b>2017 Anzer Balı Fiyatı</b><br>
    <b>1 KG 900TL</b><br>
    <b>1 KG 1000TL</b></p>
    <p class="adres">Piriçelebi Mah. Adliye Cad. 8/F<br>
      100. Yıl Mağazaları PK:53020<br>
      Merkez, Rize<br>
      Telefon : 0464 214 66 68<br>
      Faks : 0464 214 92 20<br><br>
      anzer@anzeraricilik.com<br><br>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d773.9410310595007!2d29.014716829214446!3d39.11183999872112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c83f11bfaab421%3A0x6ccabc0c0b934b18!2sDumlup%C4%B1nar+%C3%9Cniversitesi+Simav+Meslek+Y%C3%BCksekokulu!5e0!3m2!1str!2str!4v1512811966369" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></p>
  </div>
<div class="sagbilgi">
  <h1>Ürün Fiyatları</h1>
  <table id="urunler">
  <tr>
    <th>Ürün Adı</th>
    <th>Ürün Adeti</th>
    <th>Ürün Fiyatı</th>
  </tr>
  <?php
  include 'baglanti.php';
  $sorgu= $vt->query("select * from urunler",PDO::FETCH_ASSOC);
  if($sorgu->rowCount()){
    foreach ($sorgu as $sutun) {
      echo '<tr>
        <td>'.$sutun['urun_adi'].'</td>
        <td>'.$sutun['urun_adeti'].' Kavanozu</td>
        <td>'.$sutun['urun_fiyati'].'₺</td>
      </tr>';
    }
  }
   ?>
</table>
      </div>
<?php include 'altkisim.php'; ?>
