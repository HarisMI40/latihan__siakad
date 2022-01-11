<?php
include "../koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenkel = $_POST['jenkel'];
$jurusan = $_POST['jurusan'];

$sql = "UPDATE `siswa` SET `nama`='$nama',`alamat`='$alamat',`jurusan`='$jurusan',`jenis_kelamin`='$jenkel' WHERE id='$id'";

$query = mysqli_query($db, $sql);

if($query){
    header('Location: tampil_siswa.php?status=sukses-edit-siswa');
}else{
    die("gagal memasukan data".mysqli_connect_error());
}   