<?php
echo "<h3>Belajar Variabel</h3>";
$a1 = 10;
$a2 = 20;
echo "$a1 + $a2 = " . ($a1 + $a2) . "<br>";
echo "$a1 - $a2 = " . ($a1 - $a2) . "<br>";
echo "$a1 x $a2 = " . ($a1 * $a2) . "<br>";
echo "$a1 : $a2 = " . ($a1 / $a2) . "<br>";
echo "$a1 % $a2 = " . ($a1 % $a2) . "<hr>";

/*
Buat Untuk tanda - kali * dan bagi /
*/
echo "<h1>Data Integer</h1>";
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

# Tampilkan data dengan perintah echo
echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";

# mengetahui tipe data dari variabel
var_dump($e);

echo "<hr><h1>Data Float</h1></hr>";
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

# hitung nilai rata-rata
$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

# Tampilkan data

echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";

# lihat tipe data dari variabel $rataRata
echo "<h1>Data Boolean</h1>";
var_dump($rataRata);

$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);

//

$namaDepan = "Ibnu"; # pakai tanda petik dua
$namaBelakang = 'Jakaria'; # pakai tanda petik satu

# menggabungkan dua variabel dengan tanda
# petik dua
$namaLengkap = "{$namaDepan} {$namaBelakang}";

# anda juga bisa menggabungkan string dengan menggunakan tanda titik (.)
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

# [Tampilkan Data]
# kita bisa memasukkan variabel lain jika menggunakan tanda petik dua
echo "Nama Depan: {$namaDepan} <br>"; 
# ada pun jika pakai tanda petik satu, kita tidak bisa memasukkan variabel 
# di dalam string akan tetapi menggabungkannya dengan operator titik (.)
echo 'Nama Belakang: ' . $namaBelakang . '<br>';

echo $namaLengkap;
//

$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0]; // "Wahid Abdullah"
//  

echo "<h3>Data Array</h3>";
$siswa = ["kevin","kayla","atar","egi"];
echo $siswa[3];