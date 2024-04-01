<?php

class Manusia {
    public $nama;
    public $umur;
      //contoh jenis variabel fungsi = protected, private, static

    public function setNama ($nama)
    {
        $this->nama = $nama;
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;
    }

    public function getInfo()
    {
        return "Nama: " . $this->nama . " , Umur: " . $this->umur;
    }
}

//membuat objek 
$kaffah = new Manusia();
$kaffah->setNama("kaffah");
$kaffah->setUmur(19);
echo $kaffah->getInfo();

echo "<br>";

$Miftah = new Manusia();
$Miftah->setNama("Miftah");
$Miftah->setUmur(19);
echo $Miftah->getInfo();

