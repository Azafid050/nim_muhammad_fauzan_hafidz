<?php
echo "Halo ini pertama kali saya coba php!<br><br>";

// Operator Logika & Perbandingan

// Operator yang digunakan untuk membandingkan 2 kondisi yaitu logika true atau false
// operator (and atau &&)
// true, jika $a dan $b sama-sama bernilai true
echo "and atau &&<br>";
$hasil = (true and true);
var_dump($hasil); echo "<br><br>";

// operator (or atau ||)
// true, jika salah satu dari $a atau $b bernilai true
echo "or atau ||<br>";
$hasil = (true or false);
var_dump($hasil); echo "<br>";

$hasil = (false or false);
var_dump($hasil); echo "<br><br>";

// operator (xor)
// true, jika salah satu dari $a atau $b bernilai true, tapi tidak k
echo "xor<br>";
$hasil = (false xor false);
var_dump($hasil); echo "<br>";

$hasil = (false xor true);
var_dump($hasil); echo "<br><br>";


// operator (not)
// true, jika $a bernilai false 
echo "not<br>";
$hasil = true;
var_dump(!$hasil); echo "<br>";

$hasil = (false or true && false);
var_dump($hasil); echo "<br><br> ";

// Perbandingan

// operator sama dengan <==>
// true, jika nilai $a sama dengan $b
echo "operator sama dengan ==<br>";
var_dump(10 == 15); echo "<br>";
var_dump(9 == 9); echo "<br>";
var_dump(2+3 == 4+1); echo "<br>";
var_dump(2-1 == 10-5); echo "<br><br>";

// operator sama dan identik <===>
// true, jika nilai $a sama degan $b dan memiliki tipe data sama
echo "operator sama dan identik ===<br>";
var_dump(10 === 10); echo "<br>";
var_dump(10 === '10'); echo "<br>";
var_dump(10 === 1,10); echo "<br><br>";


// operator tidak sama dengan <!=>
// true, jika nilai $a tidak sama dengan $b
echo "operator tidak sama dengan !=<br>";
var_dump(10 != 5); echo "<br>";
var_dump(10 != 5+5); echo "<br>";
var_dump(2+3 != 4-2); echo "<br><br>";

// operator kurang dari (<)
// true, jika nilai $a kurang dari $b
echo "operator kurang dari <<br>";
var_dump(34 < 90); echo "<br>";
var_dump(90 < 34); echo "<br><br>";

// operator lebih dari (>)
// true, jika nilai $a lebih dari $b
echo "operator lebih dari ><br>";
var_dump(79 > 7); echo "<br>";
var_dump(89 > 88); echo "<br><br>";


// operator kurang dari atau sama dengan (<=)
// true, jika nilai $
echo "operator kurang dari atau sama dengan <=<br>";
var_dump( 13 <= 13); echo "<br>";
var_dump(10 <= 13); echo "<br>";
var_dump(13 <= 4); echo "<br><br>";

// operator lebih dari atau sama dengan (>=)
// Struktur Kontrol
echo "operator lebih dari atau sama dengan >=<br>";
var_dump( 13 >= 13); echo "<br>";
var_dump(10 >= 13); echo "<br>";
var_dump(13 >= 4); echo "<br><br>";

// If 
// if (kondisi) {statement};
    $user = "kuda"; echo "<br>";

    if($user == "kuda"){
        echo "selamat datang kuda";
    }

    if($user == "kambing"){
        echo "selamat datang kambing";
    }

// else, else if
    $user = "onta"; echo "<br>";

    if($user == "kuda"){
        echo "selamat datang onta";    
    }else{
        echo "maaf anda bukan onta";
    }

    $nama = "kuda"; echo "<br>";
    $nilai = 100;

    if ($nilai >= 90) {
        $grade = "A";
    } elseif ($nilai >= 80) {
        $grade = "B";
    } elseif ($nilai >= 70) {
        $grade = "C";
    } else {
        $grade = "D";
    }
    echo "$nama mendapat nilai $nilai, peringkatnya $grade <br>";

// switch case
// switch (svar);
// case value1;
//      statement1;
//      break;
// case value2;
//      statement2;
//      break;

    $hari = 4; echo "<br>";

    switch($hari){
    case 1 :
        echo "hari senin";
        break;
    case 2 :
        echo "hari selasa";
        break;
    case 3 :
        echo "hari rabu";
        break;
    case 4 :
        echo "hari kamis"; echo "<br>";
        break;
    case 5 :
        echo "hari jumat";
        break;
    }


// Perulangan
// For
// for(start; condition; increment;){
// statement;
// statement;
// }

for($i = 1; $i <= 10; $i++){
    echo "learning for everyday $i <br>";
}

// while
// perulangan while adalah perulangan yang digunakan ketika mengulang sesuatu yg blm jelas
// while (condition){
// statement};
// =======================================
// start;
// while (condition){
// statement;
// statement;
// increment;
// }

$i = 1; echo "<br>";
while ($i <= 10){
    echo "<p>sedang fokus belajar php -$i</p>";
    $i++;
}

// Do while
// start;
// do {
// statement;
// statement;
// increment;
// } while (condition)

$i = 1000; echo "<br>";
do{
    echo "$i ";
    echo "akan tampil di browser";
    $i++;
} while ($i <= 10);
// walaupun gk terpenuhi tetep akan memunculkan minimal 1

// pengulangan foreace

// $nama = array("kuda", "onta", "ayam", "itik", "ikan"); echo "<br>";
// for ($i = 0; $i < 5; $i++){
// echo "$nama[$i] <br>";
// }

$nama = array("kuda", "onta", "ayam", "itik", "ikan"); echo "<br>";
foreach ($nama as $value){
    echo "$value <br>";
}

$nama = array(
    1 => "kuda",
    2 => "onta",
    3 => "ayam",
    4 => "itik",
    5 => "ikan"
);
foreach ($nama as $key => $value){
    echo "urutan ke $key adalah $value <br>";
}

// Array
// Array Numerik

$hewan = ["kuda", "onta", "ayam"];{
    echo $hewan[0];
    echo $hewan[1];
    echo $hewan[2];
}

// array Asosiatif
$hewan = [
    "nama" => "kuda",
    "umur" => 6,
    "jenis" => "mamalia"
];

echo $hewan["nama"];
echo $hewan["jenis"];

// array multidimensi
$hewan = [
    ["nama" => "kuda", "umur" => 6, "jenis" => "mamalia"],
    ["nama" => "onta", "umur" => 10, "jenis" => "mamalia"]
];

echo $hewan[0]["nama"];
echo $hewan[1]["jenis"];