<?php
    $title = 'PRAKTIKUM1 PHP';
    // $nama = 'Kaffah '; //variabel harus diawali dengan dolar ($)
    // $umur = 19 ; // number tidak perlu make string

    // echo 'welcome '; //setiap baris atau setiap variabel harus diakhiri dengan (;)
    // echo $nama ;    //echo digunakan untuk mencetak = fungsi PRINT
    // echo 'welcome ' . $nama ; //tanda titik digunakan untuk menggabungkan variabel 
    // echo 'welcome ' . $nama . 'dengan umur ' . $umur ; //jangan lupa titk koma!!!!

    define('PHI',3.14); //koma untuk angka memakai titik
    $jari = 8;
    $keliling = 2 * PHI * $jari ;
    $luas = PHI * $jari * $jari ;
    echo $keliling ;
    echo '<br>' . $luas ;
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?php echo $title ?> </h1>

    <p>Luas Lingkaran : <?php echo $luas ?></p>
    <p>Keliling Lingkaran : <?php echo $keliling ?></p>
    
</body>
</html>