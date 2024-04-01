<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nama = $_POST['nama'];
    $spesialisasi = $_POST['nilai'];

    include 'dokter.php';

    $Dokter = new Dokter($nama,$spesialisasi);
    $hasilLulus = $Dokter->hasilLulus();
    $predikat = $Dokter->predikat();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Entry Data Pegawai</title>
    <link rel="stylesheet" href="FORM.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="navbar">
       <a href="#" class="text-title">Data Dokter</a>
       <a href="#">Master Data</a>
       <a href="#">Tambah Data</a>
    </div>
    <h1>Form Entry Data Dokter</h1>

    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama</th>
            <th scope="col">spesialisasi</th>
            <th scope="col">Hasil</th>
            <th scope="col">Spesialis</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td> <?= $nama ?></td>
            <td> <?= $spesialisasi ?></td>
            <td> <?= $hasilLulus ?></td>
            <td> <?= $predikat ?></td>
          </tr>
        </tbody>
      </table>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>