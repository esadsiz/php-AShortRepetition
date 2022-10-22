<?php if (isset($_POST['submit'])) {
      // isset, icine yazili degiskenin tanimli olup olmadigini True ya da False olarak döndürür.
      // Fakat kullanilis amaci genelde ilgili web sayfasindaki formun gönderilip gönderilmedigini kontrol etmektir.
      // submit'e tiklandi mi? o zaman;
      $kullaniciadi = $_POST['username'];
      $sifre = $_POST['password'];
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

      $yasakliisimler = array("enes", "hilal", "gürcan");
      if ($kullaniciadi && $sifre) {
            // kullaniciadi ve sifre alindiysa, mevcutsa;
            echo "bunu yap";
      } else {
            echo "bunu yap";
      }
} ?>

<form action="form.php" method="post">
      <input type="text" name="username">
      <input type="password" name="password">
      <input type="submit" name="submit">
</form>
<!-- 









-->
