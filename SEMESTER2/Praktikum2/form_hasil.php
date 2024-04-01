<?php
$proses = $_GET['proses'];
$nama_siswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['uts'];
$nilai_uas = $_GET['uas'];
$nilai_tugas = $_GET['tugas'];

//buat TOTAL
$total_nilai = ($nilai_uts + $nilai_tugas + $nilai_uas) / 3

//buat perhitungan if untuk mnentukan grade
if ($total_nilai >= 85) {
    $grade = "A";
}
elseif ($total_nilai >= 70) {
    $grade = "B"
}
elseif ($total_nilai >= 56) {
    $grade = "C"
}
elseif ($total_nilai >= 36) {
    $grade = "D"
}
else {
    $grade = "E";
}


// buat perhitungan SWITCHCASE untuk mencari Predikat
switch ($grade){
    case "A":
        $predikat = "Sangat Memuaskan";
        break;
    case "B":
        $predikat = "Memuaskan";
        break;
    case "C":
        $predikat = "Cukup";
        break;
    case "D":
        $predikat = "Kurang";
        break;
    case "e":
        $predikat = "Sangat Kurang";
        break;

    default :
    $predikat = Tidak Ada
}

$predikat ;

echo 'Proses: '.$proses;
echo '<br/>Nama: '.$nama_siswa;
echo '<br/>Mata Kuliah: '.$mata_kuliah;
echo '<br/>Nilai UTS :'.$nilai_uts; 
echo '<br/>Nilai UAS :'.$nilai_uas;
echo '<br/>Nilai Tugas Praktikum :' .$nilai_tugas;
?>