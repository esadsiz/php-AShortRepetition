<?php if (isset($_POST['gönder'])) {
      // isset, icine yazili degiskenin tanimli olup olmadigini True ya da False olarak döndürür.
      // Fakat kullanilis amaci genelde ilgili web sayfasindaki formun gönderilip gönderilmedigini kontrol etmektir.
      // gönder'e tiklandi mi? o zaman;
      $kullaniciadi = $_POST['kullaniciadi'];
      $sifre = $_POST['sifre'];
      // formdan cektigimiz verileri bir degiskene attik.
      $baglanti = mysqli_connect("localhost", "root", "", "loginapp");
      // php'yi veritabani ile baglarken bu metodu kullaniriz.
      // ilk parametre sunucu adidir.
      // ikinci parametre kullanici adidir.
      // ücüncü parametre sifredir.
      // dördüncü parametre veritabaninda baglanmak istedigimiz tablonun adidir.
      if ($baglanti) {
            // baglanti kurulduysa, yani True döndüyse.
            echo "bunu yap";
      } else {
            echo "bunu yap";
            die("Veritabanina baglanamadi.");
            // die metodu bastan asagi her seyi sonlandirir.
      }

      // YENI KULLANICI KAYDI
      $sorgu = "INSERT INTO users(kullaniciadi,sifre) ";
      $sorgu .= "VALUES ('$kullaniciadi','$sifre')";
      // Veritabaninda yeni kullanici kaydi olusturmak icin gerekli SQL kodlari. 
      $sonuc = mysqli_query($baglanti, $sorgu);

      if (!$sonuc) {
            die("BAGLANAMADI" . mysqli_error($baglanti));
      }

      $yasakliisimler = array("enes", "hilal", "gürcan");
      if ($kullaniciadi && $sifre) {
            // kullaniciadi ve sifre alindiysa, mevcutsa;
            echo "bunu yap";
      } else {
            echo "bunu yap";
      }
} ?>

<form action="form.php" method="post">
      <input type="text" name="kullaniciadi">
      <input type="password" name="sifre">
      <input type="submit" name="gönder">
</form>
<!-- 









-->
<?php $baglanti = mysqli_connect("localhost", "root", "", "loginapp");
      if (!$baglanti) {
            die("Veritabanina baglanamadi.");
      }

      // VERI TABANINDAN BILGI OKUMA
      $sorgu = "SELECT * FROM users";
      // Veritabaninda bilgi okumak icin gerekli SQL kodlari. 
      $sonuc = mysqli_query($baglanti, $sorgu);

      if (!$sonuc) {
            die("BAGLANAMADI" . mysqli_error($baglanti));
      }
?>

<?php
while($cekilenveridizisi = mysqli_fetch_assoc($sonuc)){
      // mysqli_fetch_assoc metodu, veritabanindan cekilen tabloyu bir dizi seklinde döndürür.
      // Array(
      // [id] => 1
      // [username] => edwin
      // [password] => superman) seklinde.
      // yani asagidaki kodlar, cekilen tablodaki her bir satir icin sunu yap demek.
      $kullaniciid = $cekilenveridizisi["kullaniciid"];
      print_r($kullaniciid);
}
?>

<form action="form.php" method="post">
      <input type="text" name="kullaniciadi">
      <input type="password" name="sifre">
      <input type="number" name="kullaniciid">
      <input type="submit" name="gönder">
</form>
<!-- 









-->
