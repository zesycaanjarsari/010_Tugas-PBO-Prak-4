<!-- Nama   : Zesyca Dwi Anjarsari -->
<!-- NIM    : 21091397010 -->
<!-- Kelas  : D4 Manajemen Informatika (2021B) -->
<!-- Soal NO 1 Praktikum 4-->

<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Nomor1.css">
    <title>Tugas Praktikum 4</title>
</head>
<body>
<div class="container">
<h2>Soal NO 1</h2>
<!-- PHP -->
<?php

class Orang{
    protected $nama,$umur;

    public function __construct($nama,$umur){
    $this->nama = $nama;
    $this->umur = $umur;
    }
}

class Dosen extends Orang{
    private $nip;
    
    public function __construct($nama, $umur, $nip){
    $this->nip = $nip;
    parent::__construct($nama, $umur);    
    }

    public function hasil(){
        return $this->nama . ' berumur ' . $this->umur. ' dengan NIP ' . $this->nip;
    }
}

$dosen1 = new Dosen('Zesyca', 25, 21091397010); 
$dosen2 = new Dosen('Dwi', 24, 21091397010);
$dosen3 = new Dosen('Anjarsari', 25, 21091397010);

echo $dosen1->hasil();
echo '<br> <br>';
echo $dosen2->hasil();
echo '<br> <br>';
echo $dosen3->hasil();
echo '<br> <br>';

?>
<!-- End Program PHP -->
</div>
</body>
</html>