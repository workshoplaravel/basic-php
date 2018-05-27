<?php
    //while
    $a = 1;
    while ($a < 10) {
        echo "Saya Berulang Sebanyak : $a <br>";
        $a++;
    }

    //FOR
    echo "<br>LOOPING FOR<br>";
    for ($i = 1; $i < 10; $i++) {
        echo "Saya Berulang Sebanyak : $i <br>";
    }

    //foreach
    echo "<br>Looping foreach<br>";

    $makanan = ['bakso', 'mie ayam', 'gado-gado'];
    foreach ($makanan as $key => $value) {
        echo "Key: $key dari: $value <br>";
    }

    echo "<br>LOOPING FOREACH<BR>";
    $minuman = ['kopi', 'jus jeruk', 'es teh'];
    $makanan = ['bakso', 'mie ayam', 'gado-gado'];
    $data = [
        'makanan' => $makanan,
        'minuman' => $minuman
    ];
    print_r($data);
    echo "<br><br>";
    $no = 1;
    foreach ($data as $jenis) {
        echo $no++ . ". ";
        foreach ($jenis as $makanan) {
            echo "$makanan, ";
        }
        echo "<br>";
    }
?>