<?php

function sayHello (string $name, callable $filter) {
    $finaaName = call_user_func($filter, $name);
    echo "Hello $finaaName" . PHP_EOL;
}

sayHello("Dewa", "strtoupper");
sayHello("Dewa", function(string $name) : string {
    return strtoupper($name);
});

sayHello("Dewa", fn($name) => strtoupper($name));