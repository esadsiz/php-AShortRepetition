<?php

class Araba {
      function __construct(){
             echo "bu classtan her obje olusturuldugunda burasi calisir.";
      }
      
      public $kapiSayisi = 4; // bu degiskene hem disaridan, hem obje üzerinden, hem de miras alan class yapilari üzerinden erisilebilir. defaulttur.
      protected $motorSayisi = 1; // bu degiskene sadece obje üzerinden ve miras alan class yapilari üzerinden erisilebilir.
      private $sürücüSayisi = 1; // bu degiskene yalnizca obje icinden ulasilabilir. miras ile aktarilmaz. bu classa özeldir.
      var $tekerlekSayisi = 4;
      static $koltukSayisi = 2; // bu yöntemle class icindeki herhangi bir degiskene obje olusturmadan ulasabiliriz.
      function tekerlekSayisiniDegistir(){
            $this->tekerlekSayisi = 2;
            Araba::$koltukSayisi = 8;
      }
}

if (class_exists("araba")) {
      echo "Bu isimde bir class mevcut.";
}
if (method_exists("araba","tekerlekDöndür")) {
      echo "Bu classin icinde bu isimde bir metod mevcut.";
}

$nesneOlustur = new Araba();
$nesneOlustur->tekerlekSayisiniDegistir(); // ya da
$nesneOlustur->tekerlekSayisi = 2;
$ayniClasstanBaskaBirNesneOlustur = new Araba();

echo Araba::$koltukSayisi; // bu yöntemle class icindeki herhangi bir degiskene obje olusturmadan ulasabiliriz.

class Ucak extends Araba {
      var $tekerlekSayisi = 5;
}

$jet = new Ucak();
$jet->tekerlekSayisiniDegistir();

?>
