<?php 
    include_once('./konfigurasi/Database.php');
    $data = new Database();

    $id = $_GET['id'];
    $sql = "delete from products where id=$id";
    if ($data->simpanData($sql)) {
        header("location:index.php");
    }
?>