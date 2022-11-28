<?php

    //class
    class Rectangular {
        private $height = 20;
        private $width = 30;

        public $nilai = 50;
        
        //protected
        protected $alas = 50;

        //
        public function getAlas(){
            return $this->alas;
        }

        public function luas() {
            $luas = $this->height * $this->width;
            echo $luas;
        }

        private function secret(){
            echo "Secret";
        }

        public function cek($value){
            // echo "Cek";
            // $this->secret();

            if($value == "admin123"){
                $this->secret();
            } else {
                echo "Access Denied!";
            }
        }
    }

    $rectangular = new Rectangular(); //object

    //
    $rectangular->luas();
    echo PHP_EOL;
    echo $rectangular->nilai;
    echo PHP_EOL;
    $rectangular->cek("admin1234");
    // $rectangular->secret();
    echo PHP_EOL;
    echo $rectangular->getAlas();
?>