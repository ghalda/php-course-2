<?php
    
    //penamaan class => panggil keyword class lalu nama classnya
    class Mobil {

        //public => atribut bisa dipanggil di object
        // private => atribut tidak bisa dipanggil di object
        public $roda = 4; // property $roda memiliki nilai default 4
        public $sepion;

        //method . function
        public function jalan(){
            echo "Mobil berjalan";
        }

        public function move($move){
            //kondisi
            if($move == 'stop'){
                echo "Mobil Stop";
            } else if($move == 'maju'){
                echo "Mobil Melaju";
            } else if($move == 'kanan'){
                echo "Mobil ke kanan";
            } else if($move == 'kiri'){
                echo "Mobil ke kiri";
            } else {
                echo "Undefined";
            }
        }
    }

    //agar class dapat direalisasikan (dipakai), maka kita perlu membuat object dari class tsb
    $mobil1 = new Mobil();

    //panggil method / property yang ada pada class mobil
    $mobil1->jalan();
    echo PHP_EOL;
    $mobil1->move('stop');

?>