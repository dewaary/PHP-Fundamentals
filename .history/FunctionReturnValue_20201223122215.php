<?php

function sum(int $first, int $second) {
    $total = $first + $second;
    return $total;
}

$result = sum(10, 10);
var_dump($result);

$result = sum(120, 210);
var_dump($result);

// Condition return value (get final value)

function getFinalValue(int $value){
    if ($value >= 80){
        return "A";
    }else if ($value >= 70){
        return "B";
    }else if ($value => 60) {
        return "C";
    }elseif ($value =>45) {
        return "C"
    }else {
        echo "Anda Harus Mengulang";
    }
}