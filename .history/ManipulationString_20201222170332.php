<?php 

echo "Manipulation String";
echo "\n";
$name = "Dewa Gede Agung Ari Septiyadi";

echo "Name : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;
echo "\n";


echo "Convertion Number to String and Revrese";
echo "\n";
$valueString = (string)100;
var_dump($valueString);

$valueInteger = (int)"100";
var_dump($valueInteger);

$valueFloat = (float)"100.1";
var_dump($valueFloat);

echo "\n";

echo "Manipulation String to Access per Character";
echo "\n";
$name2 = "Dewa";
echo $name2[0] . PHP_EOL;
echo $name2[1] . PHP_EOL;
echo $name2[2] . PHP_EOL;
echo $name2[3] . PHP_EOL;
echo "\n";

echo "Variabel Parsing";
echo "\n";
$name3 = "Dewa Gede Agung Ari Septiyadi";

echo "Selamat $name3 , Kamu telah sukses belajar PHP Fundamentals";
echo "\n";

echo "Curly Brace";
echo "\n";



?>