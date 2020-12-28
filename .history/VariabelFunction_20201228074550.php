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