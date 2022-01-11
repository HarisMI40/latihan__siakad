<?php
require '../vendor/autoload.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;
// $url = "http://localhost/sekolah/materi/php/project/siakad/";
// instantiate and use the dompdf class
$dompdf = new Dompdf();

include "../koneksi.php";
$id_jurusan = $_GET['id'];
$sql = "select * from jurusan where id= $id_jurusan";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_array($query);
$nama_pdf = 'Penilaian UAS - '.$data["kelas"].' '. $data["jurusan"].' '. $data["rombel"].' ';
$html ='
    <h1 style="text-align:center">Penilaian UAS </h1>
    <h3>Kelas : '.$data["kelas"].' '. $data["jurusan"].' '. $data["rombel"].' </h3>
    <table class="table table-bordered" width="100%" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nilai</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
';



$no = 1;
$sql = "select * from nilai INNER JOIN siswa ON nilai.id_siswa = siswa.id where nilai.id_jurusan='$id_jurusan'";
$query = mysqli_query($db, $sql);

    while($data = mysqli_fetch_array($query)){
        $html .='
        <tr>
            <td>'.$no++.'</td>
            <td scope="row">'.$data["nama"].'</td>
            <td>'.$data['nilai'].'</td>
            <td>'.$data['status'].'</td>
        </tr>
        ';
    }

    $html .= '
            </tbody>
        </table>
    ';



$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser

$dompdf->stream($nama_pdf,array('Attachment'=>0));