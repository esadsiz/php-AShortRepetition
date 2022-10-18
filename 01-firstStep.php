<?php echo "<h1>php alani </h1>"; ?>
<!-- echo, "html sayfama bunu bastir" demek. -->
<!-- 









 -->
<?php $isim = "enes";
      echo $isim;    ?>
<!-- php'de degisken tanimlama. php, büyük kücük harfe duyarlidir. -->
<!-- 









 -->
<?php $isim = "enes";
      $yas = 18;
      echo $isim." ".$yas ?>
<!-- php'de degisken echo ici birlestirme. -->
<!-- 









 -->
<?php $phpDizi1 = array();
      $phpDizi1 = [1,3,5]; // ya da
      $phpDizi2 = array();
      $phpDizi2 = ["isim"=>"enes", "yas"=>18, "ikamet"=>"<h1>Siegen</h1>"];
      print_r($phpDizi2); // php'de dizinin tamamini görme.
      echo $phpDizi2["ikamet"];
      echo $phpDizi1[1];  ?>
<!-- php'de diziler. -->
<!-- 









 -->
<?php if($isim=="hilal") {
        echo "EVET";
    } elseif($yas==18) {
        echo "BELKI";
    } else {
        echo "HAYIR";
    }
    ?>
<!-- ==, ===, >, <, <=, >=, &&, ||, ! -->
<!-- php'de if kullanimi. -->
<!-- 









 -->
<?php switch($isim) {
        case "hilal": echo "EVET";
        break;
        case "enes": echo "BELKI";
        break;
        case "gürcen": echo "HAYIR";
        break;

        default: "HICBIRI";
        break;
}   ?>
<!-- php'de switch kullanimi. -->
<!-- 









 -->
<?php while($yas<30) {
        echo "YAZ";
        $yas+=1;  
};  ?>
<!-- php'de while kullanimi. -->
<!-- 









 -->
<?php $phpDizi1 = array();
      $phpDizi1 = [1,3,5];
      
      for($i=0; $i<count($phpDizi1); $i++) {
        echo "YAZ";
};  ?>
<!-- php'de for kullanimi. -->
<!-- 









 -->
<?php $phpDizi = array();
      $phpDizi = [1,3,5];
      
      foreach($phpDizi as $herBirSayi) {
        echo $herBirSayi;
};  ?>
<!-- php'de foreach kullanimi. -->
<!-- 









 -->
<?php function birseyYazdir () {
        echo "YAZDIR";
};  ?>
<?php birseyYazdir() ?>

<?php function bunuYazdir ($neYazdirayim) {
        echo $neYazdirayim;
};  ?>
<?php bunuYazdir("bunu") ?>

<?php function carpimFonksiyonu ($sayi1,$sayi2) {
        global $yas;
        return $sayi1*$sayi2+$yas;
};    $islemSonucu=carpimFonksiyonu(3,6);
?>
<?php echo $islemSonucu  ?>
<!-- php'de fonksiyon kullanimi. -->
<!-- 









-->
<?php define("DEGISMEZIN_ADI", 500);
      echo DEGISMEZIN_ADI;
?>
<!-- php'de degismez tanimlama. -->
<!-- 









-->
<?php echo pow(2,7); // 2^7
      echo rand(1, 1000); // 1 ile 1000 arasinda rastgele sayi üretimi.
      echo sqrt(100); // 100'ün kökünü alma.
      echo ceil(4.3); // ondalikli sayi yuvarlama (5).
      echo round(4.6); // ondalikli sayi yuvarlama (5).
      echo floor(4.3); // ondalikli sayi yuvarlama (4).
?>
<!-- php'de matematik fonksiyonlari. -->
<!-- 









-->
<?php $soyisim="adsiz";
      strlen($soyisim); // stringin karakter uzunlugu.
      strtoupper($soyisim); // stringin harflerini büyütme.
      strtolower($soyisim); // stringin harflerini kücültme.
?>
<!-- php'de string fonksiyonlari. -->
<!-- 









-->
<?php $phpDizi = array();
      $phpDizi = [1,3,5];
      count($phpDizi); // arraydeki eleman sayisi.
      max($phpDizi); // arraydeki en büyük eleman.
      min($phpDizi); // arraydeki en kücük eleman.
?>
<!-- php'de array fonksiyonlari. -->
