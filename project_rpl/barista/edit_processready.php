<?php
     include '../connection/connection.php';
     $nama = $_POST['nama'];
     $status = $_POST['status'];
     $idkopi = $_POST['id_kopi'];
     

     $queryku = mysqli_query($connect, "UPDATE kopi SET nama= '$nama', status = '$status' where id_kopi = '$idkopi'") or die (mysqli_error($connect));

     if($queryku){
        header("location:ready.php");
     }else{
        echo"Edit Data Tidak Berhasil/Gagal, Silahkan Coba Lagi";
     }
?>