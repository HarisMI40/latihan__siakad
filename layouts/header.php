<?php 
$url = "http://localhost/sekolah/materi/php/project/siakad/";
session_start();
if(!isset($_SESSION['email'])){
  header("Location: ".$url."register.php?status=authentikasi_gagal");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Si Akad</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
  <link href="<?= $url ?>asset/bs/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.4/b-2.2.2/b-html5-2.2.2/datatables.min.css"/>

  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light mb-5" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= $url ?>siswa/tampil_siswa.php">Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= $url ?>nilai/tampil_penilaian_siswa.php">Nilai</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= $url ?>jurusan/tampil_jurusan.php">Jurusan</a>
        </li>
       
      </ul>
      <div>
          <a class="btn btn-danger btn-sm" aria-current="page" href="<?= $url ?>logout.php">Logout</a>
      </div>
    </div>
  </div>
</nav>
