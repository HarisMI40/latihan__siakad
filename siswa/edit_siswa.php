<?php 
include "../layouts/header.php"; 
include "../koneksi.php";
if(!isset($_GET['id'])){
    header('Location: tampil_siswa.php');
}
$id = $_GET['id'];
    $sql = "select * from siswa where id='$id'";
    $query = mysqli_query($db, $sql);
    $data= mysqli_fetch_array($query);
?>

    <main class="container">
        <h2 class="text-center">Registrasi Siswa</h2>
        <form action="proses_edit_siswa.php" method="post" class="form-group" autocomplete="off">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <div class="mb-3">
                <label for="" class="form-label">Nama</label>
                <input type="nama" name="nama" id="" class="form-control" placeholder="nama" aria-describedby="nama" value="<?= $data['nama'] ?>">
                <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>

      
            <div class="mb-3">
                <label for="" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" id="" rows="3"><?= $data['alamat'] ?></textarea>
                 <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>
               
            <div class="form-check">
                <input type="radio" class="form-check-input" name="jenkel" id="" value="laki-laki" 
                <?= $data['jenis_kelamin'] == "laki-laki" ? "checked" : ""; ?>/>
                Laki - laki
            </div>

            <div class="form-check">
                <input type="radio" class="form-check-input" name="jenkel" id="" value="perempuan"
                <?= $data['jenis_kelamin'] == "perempuan" ? "checked" : "";?>/>
                Perempuan
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Jurusan</label>
              <select class="form-control" name="jurusan" id="">
                <option value="RPL" <?= $data['jurusan'] == "RPL" ? "selected" : "";?>>Rekayasa Perangkat Lunak</option>
                <option value="TKR" <?= $data['jurusan'] == "TKR" ? "selected" : "";?>>Teknik Kendaraan Ringan</option>
                <option value="TMI" <?= $data['jurusan'] == "TMI" ? "selected" : "";?>>Teknik Mekanik Industri</option>
              </select>
            </div>

            <div class="d-grid gap-2">
              <button type="submit" name="" id="" class="btn btn-success">Edit</button>
            </div>
        </form>
    </main>
<?php include "../layouts/footer.php"; ?>