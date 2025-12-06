<?php
//Bilangan Genap
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . "\n";
}

//Luas Persegi Panjang
function hitungLuasPersegiPanjang($panjang, $lebar) {
    return $panjang * $lebar;
}
// Contoh penggunaan
$panjang = 10;
$lebar = 5;
$luas = hitungLuasPersegiPanjang($panjang, $lebar);
echo "Luas persegi panjang dengan panjang $panjang dan lebar $lebar adalah: $luas";
?>
