<?php

    //class
    class Mahasiswa{
        // public $keterangan = "";
        // public $messages = "";
        // public $nilai_rata = 0;

        //method function
        public function nilai($nilai_uts, $nilai_uas)
        {
            $nilai_rata = ($nilai_uts + $nilai_uas) / 2;
            
            if ($nilai_rata >= 81 && $nilai_rata <= 100) {
                $keterangan = "A";
                echo $keterangan ;
                echo PHP_EOL;
                $messages = "Excelent!";
                echo $messages;
                echo PHP_EOL;
                echo $nilai_rata;
            } else if ($nilai_rata >= 78 && $nilai_rata <= 80.99) {
                $keterangan = "A-";
                echo $keterangan;
                echo PHP_EOL;
                $messages = "Very Good!";
                echo $messages;
                echo PHP_EOL;
                echo $nilai_rata;
            } else if ($nilai_rata >= 75 && $nilai_rata <= 77.99) {
                $keterangan = "B+";
                echo $keterangan;
                echo PHP_EOL;
                $messages = "Good!";
                echo $messages;
                echo PHP_EOL;
                echo $nilai_rata;
            } else if ($nilai_rata >= 70 && $nilai_rata <= 74.99) {
                $keterangan = "B";
                echo $keterangan;
                echo PHP_EOL;
                $messages = "Not Bad!";
                echo $messages;
                echo PHP_EOL;
                echo $nilai_rata;
            } else if ($nilai_rata >= 65 && $nilai_rata <= 69.99) {
                $keterangan = "B-";
                echo $keterangan;
                echo PHP_EOL;
                $messages = "Bad!";
                echo $messages;
                echo PHP_EOL;
                echo $nilai_rata;
            } else if ($nilai_rata < 65) {
                $keterangan = "Tidak Lulus Mata Kuliah";
                echo $keterangan;
                echo PHP_EOL;
                $messages = "Try Again!";
                echo $messages;
                echo PHP_EOL;
                echo $nilai_rata;
            } else {
                $keterangan = "Tidak Terdefinisi";
                echo $keterangan;
                echo PHP_EOL;
                $messages = "Error!";
                echo $messages;
                echo PHP_EOL;
                echo $nilai_rata;
            }
        }

    }

    //object
    $mahasiswa = new Mahasiswa();

    //method
    $mahasiswa->nilai(30, 30);
?>