<?php

class Mahasiswa
{
    public $namaMahasiswa, $nim, $domisili, $prodi, $ipk;

    function __construct($namaMahasiswa, $nim, $domisili, $prodi, $ipk)
    {
        $this->namaMahasiswa = $namaMahasiswa;
        $this->nim = $nim;
        $this->domisili = $domisili;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }

    function setPredikatIPK($ipk)
    {
        if ($ipk > 3.5) {
            echo "Cumlaude";
        } else {
            echo "You did a great job!";
        }
    }
}

$mahasiswa = new Mahasiswa("Dwi febriyanti", "0110223274", "Bima", "TI", "3.91");
$mahasiswa->setPredikatIPK($mahasiswa->ipk);
echo "Nama lengkap : " $mahasiswa->namaMahasiswa;
echo "<br>";
echo "NIM : " $mahasiswa->nim;
echo "<br>";
echo "Domisili : " $mahasiswa->domisili;
echo "<br>";
echo "Prodi : " $mahasiswa->prodi;
echo "<br>";
echo "IPK : " $mahasiswa->ipk;
echo "<br>";
$mahasiswa->setPredikatIPK($mahasiswa->);
