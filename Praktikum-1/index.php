<?php

echo"Hello world!! <br>";
print_r("Nama saya Muhamad Risqi <br>");
var_dump("Kuliah di STT NF");

//Membuat Variabel user
$nama = "Muhamad Risky";
$umur = 18;
$berat = 50.2;
$mahasiswa = true;

echo"Nama saya adalah $nama <br>";
echo"Umur saya adalah $umur Tahun <br>";
echo"Berat badan saya $berat kg <br>";

//Membuat variabel sistem
echo "dokumen root". $_SERVER["DOCUMENT ROOT <br> "];
echo "Nama File" . $_SERVER["PHP_SELF <br> "];

//Membuat variabel konstanta
define("PHI",3.14);
$jari = 8;
$luas = PHI *$jari * $jari;
$keliling = 2 * PHI *$jari;

echo"Luas lingakarang dengan jari-jari = $jari = $luas <br>";
echo"Keliling lingkarang adalah $keliling <br>";

//Membuat arary
$programs = ["php","Javascript","HTML " ,];
echo $programs[0];
echo count($programs);
$programs[] = "Mysql";
echo count($programs);

unset($programs[0]);
echo "<br>" . $programs[0];

echo "<ol>";
foreach($programs as $programs){
    echo "<li> $programs </li>";
}
echo "</ol>";

?>