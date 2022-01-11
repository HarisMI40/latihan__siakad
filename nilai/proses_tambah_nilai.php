<?php
include "../koneksi.php";
// die(var_dump($_POST['id_siswa']));

$id_jurusan = $_POST['id_jurusan'];
$sql = "INSERT INTO `nilai`(`id_siswa`, `id_jurusan`, `nilai`, `status`) VALUES";


for ($i=0; $i < count($_POST['id_siswa']); $i++) { 
    $id_siswa = $_POST['id_siswa'][$i];
    $nilai = $_POST['nilai'][$i];
    $status = $nilai >= 75 ? "lulus" : "tidak lulus";

    $sql .= "('$id_siswa','$id_jurusan','$nilai','$status'),";
}
$panjang_kalimat =  strlen($sql);
$sql =  substr($sql,0, $panjang_kalimat - 1);

$query = mysqli_query($db, $sql);

if($query){
    header('Location: tampil_penilaian_siswa.php?status=sukses-tambah-penilaian');
}else{
    die("gagal memasukan data - ".mysqli_error($db));
}