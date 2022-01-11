<?php
include "../koneksi.php";
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenkel = $_POST['jenkel'];
$jurusan = $_POST['jurusan'];

$sql = "INSERT INTO `siswa`(`nama`, `alamat`, `jurusan`, `jenis_kelamin`) VALUES ('$nama','$alamat','$jurusan','$jenkel')";

$query = mysqli_query($db, $sql);

if($query){
    header('Location: tampil_siswa.php?status=sukses-tambah-siswa');
}else{
    die("gagal memasukan data".mysqli_connect_error());
}