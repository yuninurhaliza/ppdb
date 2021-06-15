<?php

include 'koneksi.php';

$username   = $_POST['username'];
$password   = md5($_POST['password']);

$query      = mysqli_query($conn, "INSERT INTO admin SET username='$username', password='$password' ");

if ($query) {
    header('Location: ../admin.php');
} else {
    echo 'gagal';
}
