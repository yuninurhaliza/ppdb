<?php

include 'koneksi.php';

$username   = $_POST['username'];
$password   = md5($_POST['password']);

$user = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND  password='$password' ");
$chek = mysqli_num_rows($user);
if ($chek) {
    header("location:../dataSiswa.php");
} else {
    header("location:../admin.php");
}
