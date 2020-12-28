<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Dewa");
$sayHello("Ari");

function sayGoodBye(string $name, $filter) {
    $fileName = $filter($name);
    echo "Good Bye $fileNamel" . PHP_EOL;
}

sayGoodBye("Dewa", function ($name) : string{
    return strtoupper($name);
});