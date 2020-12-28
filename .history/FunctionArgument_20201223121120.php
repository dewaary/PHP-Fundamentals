<?php 

// function sayHello($name){
//     echo "Hello $name" . PHP_EOL;
// }

// sayHello("Dewa Gede Agung");
// sayHello("Ari Septiyadi");


// Default argument value

function sayHello($name, $lastname = ""){
    echo "Hello $name $lastname" . PHP_EOL;
}

sayHello("Dewa Gede Agung", "Ari Septiyadi");

// Type Declaration

function sum(int $first, int $last) {
    
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

//Convertion Type

sum("100", "100");
sum(100, 100);
sum(true, false);
// sum([], [])


// Variabel length argument list
 function sumAll(...$values) {
     $total = 0;
     foreach($values as $value) {
         $total += $value;
     }
     echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
 }

?>