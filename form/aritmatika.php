<?php
    if (isset($_POST['submit'])) {
        $awal = $_POST['awal'];
        $akhir = $_POST['akhir'];
        $operator = $_POST['operator'];

        if ($operator == '+') {
            echo $awal + $akhir;
        } elseif ($operator == '-') {
            echo $awal - $akhir;
        } elseif ($operator == '/') {
            echo $awal / $akhir;
        } else {
            echo $awal * $akhir;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat Form Aritmatika</title>
</head>
<body>
    <form action="aritmatika.php" method="POST">
        <input type="text" name="awal" placeholder="Nilai Awal">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
        </select>
        <input type="text" name="akhir" placeholder="Nilai Akhir">
        <input type="submit" name="submit" value="Kirim">
    </form>
</body>
</html>