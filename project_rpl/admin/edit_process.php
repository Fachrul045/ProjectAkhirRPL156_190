<?php
     include '../connection/connection.php';
     $namaBahan = $_POST['bahan'];
     $idbahan = $_POST['id_bahan'];
     $namaJumlah = $_POST['jumlah'];
     

     $queryku = mysqli_query($connect, "UPDATE bahan SET bahan= '$namaBahan', jumlah =  '$namaJumlah' where id_bahan = '$idbahan'") or die (mysqli_error($connect));

     if($queryku){
        header("location:bahan.php");
     }else{
        echo"Edit Data Tidak Berhasil/Gagal, Silahkan Coba Lagi";
     }
?>