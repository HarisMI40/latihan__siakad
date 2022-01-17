<?php
include "../koneksi.php";
$id = $_POST['id'];
$jurusan = $_POST['jurusan'];
$kelas = $_POST['kelas'];
$rombel = $_POST['rombel'];

$sql = "UPDATE `jurusan` SET `jurusan`='$jurusan',`kelas`='$kelas',`rombel`='$rombel' WHERE id='$id'";

$query = mysqli_query($db, $sql);

if($query){
    header('Location: tampil_jurusan.php?status=sukses-edit-jurusan');
}else{
    die("gagal memasukan data".mysqli_connect_error());
}   