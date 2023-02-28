<?php
$nama = $_GET['name'];
$matkul = $_GET['matkul'];
$uas = $_GET['UAS'];
$uts = $_GET['UTS'];
$tugas = $_GET['Tugas'];
$total_nilai = ($tugas + $uts + $uas ) / 3; 

if($total_nilai > 75){
    $keterangan = "LULUS";
}else {
    $keterangan = "TUGAS LULUS";
}

?>