<?php 
include "../layouts/header.php"; 
include "../koneksi.php";
if(!isset($_GET['id'])){
    header('Location: tampil_jurusan.php');
}
$id = $_GET['id'];
    $sql = "select * from jurusan where id='$id'";
    $query = mysqli_query($db, $sql);
    $data= mysqli_fetch_array($query);
?>

    <main class="container">
        <h2 class="text-center">Registrasi Jurusan</h2>
        <form action="proses_edit_jurusan.php" method="post" class="form-group" autocomplete="off">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <div class="mb-3">
                <label for="" class="form-label">Jurusan</label>
                <input type="text" name="jurusan" id="" class="form-control" placeholder="jurusan" aria-describedby="jurusan" value="<?= $data["jurusan"] ?>">
                <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>
          

            <div class="mb-3">
                <label for="" class="form-label">Rombel</label>
                <input type="number" name="rombel" id="" class="form-control" placeholder="rombel" aria-describedby="rombel" value="<?= $data["rombel"] ?>">
                <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Kelas</label>
                <input type="number" name="kelas" id="" class="form-control" placeholder="kelas" aria-describedby="kelas" value="<?= $data["kelas"] ?>">
                <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>

            <div class="d-grid gap-2">
              <button type="submit" name="" id="" class="btn btn-success">Edit</button>
            </div>
        </form>
    </main>
<?php include "../layouts/footer.php"; ?>