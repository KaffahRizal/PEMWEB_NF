<?php
class Dokter{
    private $nama;
    private $spesialisasi;

    public function __construct($nama,$spesialisasi){
        $this->nama = $nama;
        $this->spesialisasi = $spesialisasi;
    }

    public function getNama(){
        return $this->nama;
    }
    public function getspesialisasi(){
        return $this->spesialisasi;
    }
    public function hasilLulus(){
        return $this->spesialisasi >= 60 ? 'Prioritas' : 'UMUM';
    }
    public function predikat(){
        if ($this->spesialisasi >= 85) {
            return 'jantung';
        } elseif ($this->spesialisasi >= 70) {
            return 'otak';
        } elseif ($this->spesialisasi >= 60) {
            return 'THT';
        } else {
            return 'otot';
        }
    }
}
?>