<?php 
    function lihatMenu()
    {
        $minuman = ['kopi', 'es teh', 'jus jeruk'];
        print_r($minuman);
    }
    lihatMenu();

    echo "<br>";
    function datadiri($nama, $no_telp)
    {
        echo $nama; echo "<br>";
        echo $no_telp;
    }
    datadiri('anugrah sandi', '085343966997');

    echo "<br>";
    //passing data ke fungsi
    function pesan($pesanan)
    {
        $minuman = ['kopi', 'es teh', 'jus jeruk'];
        foreach ($minuman as $row) {
            if ($row == $pesanan) {
                return "Terima Kasih Kamu Telah Memesan $row";
            } else {
                return "Maaf, Pesanan $pesanan yang kamu minta tidak ada";
            }
        }
    }
    echo pesan('kopi');
?>
