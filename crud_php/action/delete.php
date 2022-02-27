<?php
    require "../function.php";

    $idMahasiswa = $_GET['id'];
    $isDeleted = delete("DELETE from mahasiswa WHERE id = $idMahasiswa");

    if ($isDeleted){
        header("Location: /crud_php/index.php");
    } else {
        echo "Gagal menghapus data di database";
        die();
    }