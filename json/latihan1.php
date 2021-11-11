<?php


// $mahasiswa = [
//     [
//         "nama" => "Sandhika",
//         "nrp" => "13124793024",
//         "email" => "a@gmail.com"
//     ],
//     [
//         "nama" => "Dana",
//         "nrp" => "13124793024",
//         "email" => "a@gmail.com"
//     ]
// ];

$db = new PDO('mysql:host=localhost;dbname=ci4', 'root', '');
$conn = $db->prepare('SELECT * FROM komik');

$conn->execute();

$mahasiswa = $conn->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

var_dump($mahasiswa);
