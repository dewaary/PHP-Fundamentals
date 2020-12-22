<?php 

// Union Operation

$first = [
    "first_name" => "Dewa Gede Agung"

];

$last = [
    "last_name" => "Ari Septiyadi"
];

$full = $first + $last;
var_dump($full);


// 

$a = [
    "first_name" => "Dewa Gede Agung",
    "last_name" => "Ari Septiyadi"
];

$b = [
    "last_name" => "Ari Septiyadi",
    "first_name" => "Dewa Gede Agung"

];

var_dump($a == $b);

var_dump($a === $b);

?>