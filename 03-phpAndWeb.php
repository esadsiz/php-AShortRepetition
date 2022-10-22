<?php
print_r($_GET[]);
// Array([kullaniciadi] => enes
//       [sifre] => superman) seklinde bir array bastirir.

echo $_POST["kullaniciadi"];
?>

<form action="index.php" method="post">
      <input type="text" name="kullaniciadi">
      <input type="password" name="sifre">
      <input type="submit">
</form>
<!--
      









-->
<?php
setcookie("cerezadi", 100, (time() + (60*60*24*7)))
// bu cookie'nin adi "cerezadi", value'sü 100, son kullanma tarihi bundan 1 hafta sonrasi olsun.
?>
<!-- php'de cookie olusturma -->
<!--
      




-->
<?php
if(isset($_COOKIE["cerezadi"])) {
      $cookieninvaluesu = $_COOKIE["cerezadi"];
      // bu cerezadi'nin value'sunu döndürür. 
} else {
      $cookieninvaluesu = "";
}
?>
<!-- php'de cookie okuma -->
<!--
      




-->
<?php
session_start(); // bu komutla, kullanici tarayicisina gittik ve kendimize ait bir dosya olusturduk.
$_SESSION["selamlama"] = "Tekrardan Merhaba!"; // olusturdugumuz session'a bir özellik yükledik.
// örnegin $_SESSION["selamlama"]'yi bir degiskene atarak sayfamizi tekrar ziyaret ettiginde bunu kullaniciya gösterebiliriz.
?>
<!-- php'de session olusturma -->
