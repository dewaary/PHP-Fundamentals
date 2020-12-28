<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Dewa");
$sayHello("Ari");

function sayGoodBye(string $name, $filter) {
    $fileName = $filter($name);
    echo "Good Bye $fileName" . PHP_EOL;
}

sayGoodBye("Dewa", function ($name) : string{
    return strtoupper($name);
});

$filterFunction = function (string $name) : string {
    return strtoupper($name);
};

sayGoodBye("Dewa", $filterFunction);


$firstName = "Dewa";
$lastName = "ari";

$sayHelloDewa = function () use ($firstName, $lastName){
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloDewa();