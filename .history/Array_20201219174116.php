<?php 

$values = array(1,2,3,4,5,6,7,8,9,10, 10,5);
var_dump($values);

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

$names[] = "Putra";
var_dump($names);

// Count Data Array



?>