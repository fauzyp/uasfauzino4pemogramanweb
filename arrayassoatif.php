<?php

// $hari = array("Senin","Selasa","Rabu");
// $bulan = ["Januari","Februari","Maret"];

// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// array asossiatif

$Mahasiswa = [
["nama"=> "Muhammad Fauzi Pratama",
"NPM" => "20552011020",
"email" => "pratamafauzi8@gmail.com",
"Jurusan" => "Teknik Informatika",
"nilai" => [100,100,100]
],
["nama" => "Uji",
"NPM" => "20552011020",
"email" => "pratamauzi@gmail.com",
"Jurusan" => "Teknik Informatika",
"nilai" => [90,90,100]
]
];
echo $Mahasiswa[0]["nama"];
echo "<br>";
echo $Mahasiswa[0]["NPM"];
echo "<br>";
echo $Mahasiswa[1]["nilai"][1];
?>