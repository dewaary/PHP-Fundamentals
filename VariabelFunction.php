<?php

function foo(){
    echo "Foo" . PHP_EOL;
}

function bar() {
    echo "Bar" . PHP_EOL;
}

$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName();


/// Penggunaan Variabel Function

function sayHello(string $name, $filter) {
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sample(string $name) : string {
    return "Sample $name";
}

sayHello("Dewa", "strtoupper");
sayHello("Dewa", "strtolower");


