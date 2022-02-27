<?php
    require "../function.php";

    $idMahasiswa = $_POST["id"];
    $namaMahasiswa = $_POST["Nama"];
    $nimMahasiswa = $_POST["NIM"];

    $isUpdated = save("UPDATE mahasiswa SET Nama = '$namaMahasiswa', NIM = '$nimMahasiswa' 
    WHERE id = $idMahasiswa");

if ($isUpdated){
    header("Location: /crud_php/index.php");
} else {
    echo "Gagal mengupdate data ke database";
    die();
}