<?php
include "koneksi.php";
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "insert into user(email,password) values('$email','$password')";

$query = mysqli_query($db, $sql);

if($query){
    session_start();
    $_SESSION['email'] = $email;
    header('Location: siswa/tampil_siswa.php?status=sukses');
}else{
    die("gagal memasukan data".mysqli_connect_error());
}