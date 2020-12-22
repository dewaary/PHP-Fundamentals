<?php 

$nilai = 30;
$abses = 75;

// if($nilai >= 75 && $abses >= 75){
//     echo "Selamat anda lulus" . PHP_EOL;
// } else {
//     echo "Anda tidak lulus, coba mengulang tahun depan :)" . PHP_EOL;
// }

// Else if Statement

if($nilai >= 85 && $abses >= 80){
    echo "Selamat Nilai anda A" . PHP_EOL;
} else if($nilai >= 75 && $abses >= 75) {
    echo "Selamat Nilai anda B" . PHP_EOL;
}else if($nilai >= 60 && $abses >= 60) {
    echo "Selamat Nilai anda C" . PHP_EOL;
}else if($nilai >= 50 && $abses >= 50) {
    echo "Selamat Nilai anda D" . PHP_EOL;
} else {
    echo "Nilai Anda E, anda tidak lulus mata kuliah ini." . PHP_EOL;
}

// Syntax Alternatif
if($nilai >= 85 && $abses >= 80) :
    echo "Selamat Nilai anda A" . PHP_EOL;
elseif($nilai >= 75 && $abses >= 75) :
    echo "Selamat Nilai anda B" . PHP_EOL;
elseif($nilai >= 75 && $abses >= 75) :
    echo "Selamat Nilai anda C" . PHP_EOL;
elseif($nilai >= 75 && $abses >= 75) :
    echo "Selamat Nilai anda D" . PHP_EOL;
else :
    echo "Nilai Anda E, anda tidak lulus mata kuliah ini." . PHP_EOL;
endif;

?>