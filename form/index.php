<?php
    if (isset($_POST['submit'])) {
        $makanan = $_POST['pesanan'];
        echo $makanan;
        echo "<br>";
        echo $_POST['pesanan'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat Form</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="pesanan" placeholder="Masukkan Pesanan">
        <input type="submit" name="submit" value="Kirim">
    </form>
</body>
</html>