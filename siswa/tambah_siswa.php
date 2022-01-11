<?php include "../layouts/header.php"; ?>
    <main class="container">
        <h2 class="text-center">Registrasi Siswa</h2>
        <form action="proses_tambah_siswa.php" method="post" class="form-group" autocomplete="off">
            <div class="mb-3">
                <label for="" class="form-label">Nama</label>
                <input type="nama" name="nama" id="" class="form-control" placeholder="nama" aria-describedby="email">
                <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>

      
            <div class="mb-3">
                <label for="" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" id="" rows="3"></textarea>
                 <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>
               
            <div class="form-check">
                <input type="radio" class="form-check-input" name="jenkel" id="" value="laki-laki" />
                Laki - laki
            </div>

            <div class="form-check">
                <input type="radio" class="form-check-input" name="jenkel" id="" value="perempuan" />
                Perempuan
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Jurusan</label>
              <select class="form-control" name="jurusan" id="">
                <option value="RPL">Rekayasa Perangkat Lunak</option>
                <option value="TKR">Teknik Kendaraan Ringan</option>
                <option value="TMI">Teknik Mekanik Industri</option>
              </select>
            </div>

            <div class="d-grid gap-2">
              <button type="submit" name="" id="" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </main>
<?php include "../layouts/footer.php"; ?>