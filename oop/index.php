<?php
    class Matematika {
        protected $a = 4;
        protected $b = 5;
        protected $nilai;

        public function __construct()
        {
            $this->nilai = 4;
        }

        public function menjumlahkan()
        {
            return $this->a + $this->b;    
        }

        public function perkalian($a, $b)
        {
            return $a * $b;
        }

        public function luasSegitiga($alas, $tinggi)
        {
            $hasil = 1/2 * $alas * $tinggi;
            return $hasil;
        }

        public function penjumlahanSegitiga()
        {
            $penjumlahan = $this->menjumlahkan();
            $segitiga = $this->luasSegitiga(4, 5);
            return $penjumlahan + $segitiga;
        }

        public function cetakNilai()
        {
            return $this->nilai;
        }
    }

    $mtk = new Matematika();
    echo "Menjumlahkan: " . $mtk->menjumlahkan();
    echo "<br>";
    echo "Perkalian: " . $mtk->perkalian(4, 10);
    echo "<br>";
    echo "Luas Segitiga: " . $mtk->luasSegitiga(4, 6);
    echo "<br>";
    echo $mtk->penjumlahanSegitiga();
    echo "<br>";
    echo $mtk->cetakNilai();
?>