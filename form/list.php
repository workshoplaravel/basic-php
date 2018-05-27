<?php
    if (isset($_POST['submit'])) {
        $list = $_POST['list'];
        $createList = explode(',', $list);

        echo "<ul>";
        foreach ($createList as $row) {
            echo "<li>$row</li>";
        }
        echo "</ul>";
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
    <form action="list.php" method="POST">
        <textarea name="list" cols="30" rows="10"></textarea>
        <input type="submit" name="submit" value="Kirim">
    </form>
</body>
</html>