<?php
include '../connection/connection.php';
$usr = $_POST['username'];
$pass = $_POST['password'];

$sql = "INSERT INTO barista VALUES('$usr', '$pass')";
$query = mysqli_query($connect, $sql);
if ($query) {
    header("location:register.php?message=berhasil");
} else {
    header("location:register.php?message=register_gagal");
}
