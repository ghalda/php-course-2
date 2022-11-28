<?php
    
    //penamaan class => panggil keyword class lalu nama classnya
    class Mobil {

        //public => atribut bisa dipanggil di object
        // private => atribut tidak bisa dipanggil di object
        public $roda = 4; // property $roda memiliki nilai default 4
        
        public $sepion;
    }

    //agar class dapat direalisasikan (dippakai), maka kita perlu membuat object dari class tsv
    $mobil1 = new Mobil();

    //call atribut roda
    print($mobil1->roda);
    //call atribut and declare it
    $mobil1->sepion = 2;
    //mengisikan suatu nilai ke dalam atribut class
    $mobil1->sepion = $mobil1->roda + 2;
    echo $mobil1->sepion;
    echo PHP_EOL; // menghilangkan tag html 
?>