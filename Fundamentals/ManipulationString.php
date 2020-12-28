<?php 

echo "Manipulation String" . PHP_EOL;

$name = "Dewa Gede Agung Ari Septiyadi";

echo "Name : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;



echo "Convertion Number to String and Revrese" . PHP_EOL;;
$valueString = (string)100;
var_dump($valueString);

$valueInteger = (int)"100";
var_dump($valueInteger);

$valueFloat = (float)"100.1";
var_dump($valueFloat);


echo "Manipulation String to Access per Character" . PHP_EOL;;
$name2 = "Dewa";
echo $name2[0] . PHP_EOL;
echo $name2[1] . PHP_EOL;
echo $name2[2] . PHP_EOL;
echo $name2[3] . PHP_EOL;


echo "Variabel Parsing" . PHP_EOL;;
$name3 = "Dewa Gede Agung Ari Septiyadi";
echo "Selamat $name3 , Kamu telah sukses belajar PHP Fundamentals" . PHP_EOL;;


echo "Curly Brace" . PHP_EOL;;
$var = "pars";
echo "This is {$var}ing" . PHP_EOL;

?>