<?php
# IF 1 variabel
$hari =  "cerah";
if ($hari ==  "Hujan") {
    echo "saya bawa payung";
}

## IF dengan 2 variabel
if ($hari ==  "Hujan") {
    echo "saya bawa payung";
} else {
    echo "saya tidak bawa payung";
}
echo "<hr>";

/*
buat if dengan 2 variable yang meangatakan anda lulus  atau anda tidak lulus jika nilai yang di dapat adalah >= 75
*/
$nilai =  75;
$nilai1 = 65;

if ($nilai >=  75 AND $nilai <=100) {
    echo "nilai anda $nilai, Anda <b>lulus</b>";
} else {
    echo "Nilai Anda $nilai,Anda <b>Tidak Lulus</b>";
}
echo "<hr>";

#4 variable
$nilai =  75;
if ($nilai >= 91 && $nilai <= 100) :
    echo "nilai anda $nilai, nilai anda A";
elseif ($nilai >= 83 && $nilai < 91) :
    echo "nilai anda $nilai, nlai anda B";
elseif ($nilai >= 75 && $nilai < 83) :
    echo "nilai anda $nilai, nilai anda C";
elseif ($nilai >= 0 && $nilai < 75) :
    echo "nilai anda $nilai, nilai anda D";
else :
    echo "nilai anda $nilai, tidak ada ketentuan nilai seperti ini";
endif;
echo "<hr>";
