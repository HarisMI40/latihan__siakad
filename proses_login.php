<?php
include "koneksi.php";
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "select * from user where email='$email' and password='$password'";

$query = mysqli_query($db, $sql);
$data =  mysqli_num_rows($query);

if($data > 0){
    session_start();
    $_SESSION['email'] = $email;
    header('Location: siswa/tampil_siswa.php?status=auth_sukses');
}else{
    header('Location: login.php?status=auth_gagal');
}