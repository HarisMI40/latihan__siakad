<?php include "../layouts/header.php"; ?>
<style>
    .button-size{
        transform:scale(0.7);
        margin-left:-15px;
    }
</style>

<main class="container">

   <div class="d-flex justify-content-between mb-2">
    <a href="tambah_nilai.php" class="btn btn-success button-size">+ Tambah Data</a>
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
   </div>
 

  <table class="table table-bordered">
      <thead>
          <tr>
              <th>No</th>
              <th>Penilaian</th>
              <th>Kelas</th>
              <th>Jurusan</th>
              <th>#</th>
          </tr>
      </thead>
      <tbody>
        <?php
            include "../koneksi.php";
            $sql = "select * from jurusan ";
            
            $no = 1;
            $query = mysqli_query($db, $sql);
            
            while($data = mysqli_fetch_array($query)){
                $jurusan = $data["jurusan"];
                $id = $data["id"];
        ?>
          <tr>
              <td scope="row"><?= $no++ ?></td>
              <td>UAS</td>
              <td><?= $data["kelas"] ?></td>
              <td><?= $data["jurusan"] ?></td>
              <td width="20%">
                  <a href="tambah_nilai.php?id=<?= $id ?>" class="btn btn-success btn-sm">Nilai</a>
                  <a href="tampil_nilai.php?id=<?= $id ?>" class="btn btn-primary btn-sm">Detail</a>
                  <a href="" class="btn btn-warning btn-sm">Print</a>
                </td>
          </tr>
        <?php } ?>
      </tbody>
  </table>
  
</main>

<?php include "../layouts/footer.php"; ?>