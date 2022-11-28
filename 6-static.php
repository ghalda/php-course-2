<?php
    //class
    class Singa{

        //atribut statis
        public static $kaki = 4;

        //method yang static
        public static function lari(){
            echo "Singa berlari";
        }
    }

    //pemanggilan atribut static pada class Singa
    echo "Kaki Singa ada " . Singa::$kaki;

    echo PHP_EOL;

    //pemanggilan function pada  class Singa
    Singa::lari();
?>