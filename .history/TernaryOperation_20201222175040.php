<?php 

$gender = "PRIA";
$hi = null;

if ($gender == "PRIA"){
    $hi = "Hi Bro!";
} else {
    $hi = "Hi nona";
}

$hi = $gender == "PRIA" ? "Hi Bro" : "Hi Nona";

echo $hi . PHP_EOL;


// Ternary Operator


?>