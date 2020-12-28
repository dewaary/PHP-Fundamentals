<?php

function sayHello (string $name, callable $filter) {
    $finaaName = call_user_func($filter, $name);
    echo "Hello $finaaName" . PHP_EOL;
}

sayHello("Dewa", "strtoupper");

// Cal using anonymouse function

sayHello("Dewa", function(string $name) : string {
    return strtoupper($name);
});

// call using arrow function

sayHello("Dewa", fn($name) => strtoupper($name));