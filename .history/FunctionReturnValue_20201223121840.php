<?php

function sum(int $first, int $second) {
    $total = $first + $second;
    return $total;
}

$result = sum(10, 10);
var_dump($result);