<?php
include "../koneksi.php";
$id = $_GET['id'];

$sql = "Delete from jurusan where id='$id'";

$query = mysqli_query($db, $sql);

if($query){
    header('Location: tampil_jurusan.php?status=sukses-hapus');
}else{
    die("gagal menghapus data".mysqli_connect_error());
}