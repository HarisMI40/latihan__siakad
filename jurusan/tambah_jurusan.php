<?php include "../layouts/header.php"; ?>
    <main class="container">
        <h2 class="text-center">Registrasi Siswa</h2>
        <form action="proses_tambah_jurusan.php" method="post" class="form-group" autocomplete="off">
            <div class="mb-3">
                <label for="" class="form-label">Nama</label>
                <input type="text" name="jurusan" id="" class="form-control" placeholder="jurusan" aria-describedby="jurusan">
                <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>
          

            <div class="mb-3">
                <label for="" class="form-label">Rombel</label>
                <input type="number" name="rombel" id="" class="form-control" placeholder="rombel" aria-describedby="rombel">
                <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Kelas</label>
                <input type="number" name="kelas" id="" class="form-control" placeholder="kelas" aria-describedby="kelas">
                <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>


            <div class="d-grid gap-2">
              <button type="submit" name="" id="" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </main>
<?php include "../layouts/footer.php"; ?>