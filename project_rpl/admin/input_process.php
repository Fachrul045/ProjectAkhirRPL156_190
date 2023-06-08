<?php
include '../connection/connection.php';
$nama = $_POST['nama_kopi'];
$harga = $_POST['harga_kopi'];
$status = $_POST['status_kopi'];

$mysql = "INSERT INTO kopi VALUES ( '$nama', '$harga', '$status' ,id_kopi)";
$query = mysqli_query($connect, $mysql) or die (mysqli_error($connect));

if($query){
    header("location:input.php?message=berhasil");
}else{
    echo "Input Eror?message=register_gagal";
}


?>