<?php
include '../connection/connection.php';
$bayarID = $_GET['id_bayar'];

$sql = mysqli_query($connect, "DELETE FROM bayar where id_bayar = $bayarID");
 if($sql){
    header("location:order.php");
    die();
 }else{
    echo "Proses Delete Tidak Berhasil/Gagal";
 }
?>

