

<?php
     include '../connection/connection.php';
     $namaKopii = $_POST['nama'];
     $namaHargaa = $_POST['harga'];
     $sqlku = "INSERT INTO bayar Values ('$namaKopii','$namaHargaa',id_bayar)";

     $queryku = mysqli_query($connect, $sqlku) or die (mysqli_error($connect));

     if($queryku){
        header("location:final.php");
     }else{
        echo"Insert Data Tidak Berhasil/Gagal, Silahkan Coba Lagi";
     }
?>