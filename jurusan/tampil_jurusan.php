<?php include "../layouts/header.php"; ?>
<style>
    .button-size{
        transform:scale(0.7);
        margin-left:-15px;
    }
</style>

<main class="container">

   <div class="d-flex justify-content-between mb-2">
    <a href="tambah_jurusan.php" class="btn btn-success button-size">+ Tambah Data</a>
    <form class="d-flex" action="">
        <input class="form-control me-2" name="q" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
   </div>
 
        <table class="table table-bordered" id="table_id">
        <thead>
            <tr>
                <th>No</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Rombel</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "../koneksi.php";
                // $sql = "select * from siswa";

                $sql = "select * from jurusan";
                if(isset($_GET['q'])){
                    $q = $_GET['q'];
                    $sql = "select * from jurusan 
                    where jurusan LIKE '%$q%' or kelas LIKE '%$q%' or rombel LIKE '%$q%'
                    ";
                }
                $no = 1;
                $query = mysqli_query($db, $sql);
                
                while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td scope="row"><?= $no++ ?></td>
                <td><?= $data["kelas"] ?></td>
                <td><?= $data["jurusan"] ?></td>
                <td><?= $data["rombel"] ?></td>
                <td width="20%">
                    <a href="proses_hapus_jurusan.php?id=<?= $data['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                    <a href="edit_jurusan.php?id=<?= $data['id'] ?>" class="btn btn-success btn-sm">Edit</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
  
  
</main>

<?php include "../layouts/footer.php"; ?>