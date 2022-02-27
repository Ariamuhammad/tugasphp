<?php
    require "../function.php";

$namaMahasiswa = $_POST['Nama'];
$nimMahasiswa = $_POST['NIM'];
$query = "INSERT INTO mahasiswa (Nama, NIM) VALUES ('$namaMahasiswa', '$nimMahasiswa')";
$isInserted = save($query);

if ($isInserted){
    header("Location: /crud_php/index.php");
} else {
    echo "Gagal memasukkan data ke database";
    die();
}