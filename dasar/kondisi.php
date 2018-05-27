<?php
    $kondisi1 = 'makanan';
    $kondisi2 = 'minuman';

    if ($kondisi1 == $kondisi2) {
        echo 'iya';
    } else {
        echo 'tidak';
    }

    echo  "<br>";

    //else if
    if ($kondisi1 != 'makanan') {
        echo 'betul';
    } elseif ($kondisi2 == 'minuman') {
        echo "betul ini minuman";
    } else {
        echo "tidak keduanya";
    }

    echo "<br>";
    //looping if
    for ($i = 1; $i < 10; $i++) {
        if ($i == 3) {
            echo "Iya saya $i";
        }
    }

?>