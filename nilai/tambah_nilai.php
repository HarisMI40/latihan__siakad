<?php include "../layouts/header.php"; ?>
    <main class="container">
        <h2 class="text-center">Penilaian Siswa</h2>
        <form action="proses_tambah_nilai.php" method="post" class="form-group">
        <input type="hidden" name="id_jurusan" value="<?= $_GET['id'] ?>">
            <table class="table table-striped bordered table-responsive table-bordered">
                    <tbody>
                    
                    <?php
                        include "../koneksi.php";
                        if(isset($_GET['id'])){
                            $q = $_GET['id'];
                            $sql = "select * from siswa where jurusan='$q'";
                        }
                        $no = 1;
                        $query = mysqli_query($db, $sql);
                        
                        while($data = mysqli_fetch_array($query)){
                    ?>
                   
                        <tr>
                            <td><?= $data["nama"] ?></td>
                            <input type="hidden" name="id_siswa[]" value="<?= $data["id"] ?>">
                            <td>
                                <input type="number" class="form-control" name="nilai[]" id="" aria-describedby="helpId" placeholder="">
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
            </table>
            <button type="submmit" name="" id="" class="btn btn-primary" href="#" role="button">Simpan</button>
            
        </form>
    </main>
<?php include "../layouts/footer.php"; ?>