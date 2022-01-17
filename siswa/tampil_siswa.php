<?php include "../layouts/header.php"; ?>
<style>
    .button-size{
        transform:scale(0.7);
        margin-left:-15px;
    }
</style>

<main class="container">

   <div class="d-flex justify-content-between mb-2">
    <a href="tambah_siswa.php" class="btn btn-success button-size">+ Tambah Data</a>
    <form class="d-flex" action="">
        <input class="form-control me-2" name="q" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
   </div>
 
  <div class="row">
    <div class="col-md-2">
        <ul class="list-group">
        <?php
                include "../koneksi.php";
                $sql = "select distinct jurusan from jurusan ";
                
                $no = 1;
                $query = mysqli_query($db, $sql);
                
                while($data = mysqli_fetch_array($query)){
                    $jurusan = $data["jurusan"];
            ?>
            <li class="list-group-item list-group-item-action"
            onclick="window.location='tampil_siswa.php?q=<?= $jurusan ?>'"
            ><?= $jurusan ?></li>
        <?php } ?>
        </ul>
    </div>

    <div class="col-md-10">
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "../koneksi.php";
                // $sql = "select * from siswa";

                $sql = "select * from siswa INNER JOIN jurusan ON siswa.jurusan = jurusan.id";
                if(isset($_GET['q'])){
                    $q = $_GET['q'];
                    $sql = "select * from siswa INNER JOIN jurusan ON siswa.jurusan = jurusan.id
                    where siswa.nama LIKE '%$q%' or jurusan.jurusan LIKE '%$q%'
                    ";
                }
                $no = 1;
                $query = mysqli_query($db, $sql);
                
                while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td scope="row"><?= $no++ ?></td>
                <td><?= $data["nama"] ?></td>
                <td><?= $data["kelas"] ?></td>
                <td><?= $data["jurusan"]." ". $data["rombel"] ?></td>
                <td width="20%">
                    <a href="proses_hapus_siswa.php?id=<?= $data['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                    <a href="edit_siswa.php?id=<?= $data['id'] ?>" class="btn btn-success btn-sm">Edit</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
  </div>
  
  
</main>

<?php include "../layouts/footer.php"; ?>