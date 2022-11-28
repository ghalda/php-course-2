<?php

    //class
    class Mahasiswa{
        public $keterangan = "";
        public $messages = "";
        // public $nilai_rata = 0;

        //method function
        public function nilai($nilai_uts, $nilai_uas)
        {
            $nilai_rata = ($nilai_uts + $nilai_uas) / 2;
            
            if ($nilai_rata >= 81 && $nilai_rata <= 100) {
                $this->keterangan = "A";
                echo $this->keterangan ;
                echo PHP_EOL;
                $this->messages = "Excelent!";
                echo $this->messages;
                echo PHP_EOL;
                echo $nilai_rata;
            } else if ($nilai_rata >= 78 && $nilai_rata <= 80.99) {
                $this->keterangan = "A-";
                echo $this->keterangan;
                echo PHP_EOL;
                $this->messages = "Very Good!";
                echo $this->messages;
                echo PHP_EOL;
                echo $nilai_rata;
            } else if ($nilai_rata >= 75 && $nilai_rata <= 77.99) {
                $this->keterangan = "B+";
                echo $this->keterangan;
                echo PHP_EOL;
                $this->messages = "Good!";
                echo $this->messages;
                echo PHP_EOL;
                echo $nilai_rata;
            } else if ($nilai_rata >= 70 && $nilai_rata <= 74.99) {
                $this->keterangan = "B";
                echo $this->keterangan;
                echo PHP_EOL;
                $this->messages = "Not Bad!";
                echo $this->messages;
                echo PHP_EOL;
                echo $nilai_rata;
            } else if ($nilai_rata >= 65 && $nilai_rata <= 69.99) {
                $this->keterangan = "B-";
                echo $this->keterangan;
                echo PHP_EOL;
                $this->messages = "Bad!";
                echo $this->messages;
                echo PHP_EOL;
                echo $nilai_rata;
            } else if ($nilai_rata < 65) {
                $this->keterangan = "Tidak Lulus Mata Kuliah";
                echo $this->keterangan;
                echo PHP_EOL;
                $this->messages = "Try Again!";
                echo $this->messages;
                echo PHP_EOL;
                echo $nilai_rata;
            } else {
                $this->keterangan = "Tidak Terdefinisi";
                echo $this->keterangan;
                echo PHP_EOL;
                $this->messages = "Error!";
                echo $this->messages;
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