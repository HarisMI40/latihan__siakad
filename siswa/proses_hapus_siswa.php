<?php
include "../koneksi.php";
$id = $_GET['id'];

$sql = "Delete from siswa where id='$id'";

$query = mysqli_query($db, $sql);

if($query){
    header('Location: tampil_siswa.php?status=sukses-hapus-siswa');
}else{
    die("gagal menghapus data".mysqli_connect_error());
}