<?php include "../layouts/header.php"; ?>
<style>
    .button-size{
        transform:scale(0.7);
        margin-left:-15px;
    }
</style>

<main class="container">
    <?php
            include "../koneksi.php";
            $id_jurusan = $_GET["id"];
            $sql = "select * from jurusan where id= $id_jurusan";
           
          
            $query = mysqli_query($db, $sql);
            
            $data = mysqli_fetch_array($query);
            
    ?>
    <h3>Kelas : <?= $data["kelas"]." ". $data["jurusan"]." ". $data["rombel"] ?></h3>
   <div class="d-flex justify-content-between mb-2">
    <p></p>
    <form class="d-flex" action="">
        <input class="form-control me-2" name="q" type="search" placeholder="Search" aria-label="Search">
        <input type="hidden" name="id" value="<?= $id_jurusan ?>">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
   </div>
 
   
  <table class="table table-bordered">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Nilai</th>
              <th>Status</th>
          </tr>
      </thead>
      <tbody>
      <?php
            $sql = "select * from nilai INNER JOIN siswa ON nilai.id_siswa = siswa.id where nilai.id_jurusan='$id_jurusan'";
         
            $no = 1;
           
            if(isset($_GET['q'])){
                $q = $_GET['q'];
                $sql = "select * from nilai INNER JOIN siswa ON nilai.id_siswa = siswa.id where nilai.id_jurusan='$id_jurusan' and siswa.nama='$q'" ;
            }
            $query = mysqli_query($db, $sql);
            while($data = mysqli_fetch_array($query)){
           
        ?>
          <tr>
              <td scope="row"><?= $no++ ?></td>
              <td><?= $data['nama'] ?></td>
              <td><?= $data['nilai'] ?></td>
              <td><?= $data['status'] ?></td>
          </tr>
          <?php } ?>
         
      </tbody>
  </table>
  
</main>

<?php include "../layouts/footer.php"; ?>