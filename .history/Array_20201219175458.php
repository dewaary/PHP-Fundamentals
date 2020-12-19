<?php 

// Data Integer Array

$values = array(1,2,3,4,5,6,7,8,9,10, 10,5);
var_dump($values);

// Data String Array

$names = ["Dewa", "Gede", "Agung", "Ari"];
var_dump($names);

// Get Data Array [0]
var_dump($name[0]);

// Edit Data Array [0]

$names[0] = "Septiyadi";
var_dump($names);

// Delete Data Array [1]

unset($names[1]);
var_dump($name);

// Create Data Array

$names[] = "Gede";
var_dump($names);

// Count Data Array Names
var_dump(count($names));

// Mapping Array

// Default Autoincrement Map Index Array
$dewa = array(
    0 => "Dewa",
    1 => "Gede",
    2 => "Agung Ari",
    3 => 23
);
var_dump($dewa);

// Struktur Data Map (Harus Unix)
$dewa1 = array(
    "id" => "1",
    "name" => "Dewa Gede Agung",
    "age" => 23
);
var_dump($dewa1);

// Get Data Mapping using Id
var_dump($dewa1["name"]);

// Create Array Using []
$agung = [
    "id" => "1",
    "name" => "Dewa Gede Agung",
    "age" => 23
];
var_dump($agung);

?>