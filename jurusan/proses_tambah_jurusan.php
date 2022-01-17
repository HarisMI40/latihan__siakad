<?php
include "../koneksi.php";
$jurusan = $_POST['jurusan'];
$kelas = $_POST['kelas'];
$rombel = $_POST['rombel'];

$sql = "INSERT INTO `jurusan`(`jurusan`, `kelas`, `rombel`) VALUES ('$jurusan','$kelas','$rombel')";

$query = mysqli_query($db, $sql);

if($query){
    header('Location: tampil_jurusan.php?status=sukses-tambah');
}else{
    die("gagal memasukan data".mysqli_connect_error());
}