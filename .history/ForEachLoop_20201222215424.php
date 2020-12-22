<?php 

$name = ["Dewa", "Gede", "Agung", "Ari"];

for ($i = 0; $i < count($name); $i++){
    echo "Data ke $i = $name[$i]". PHP_EOL;
}

foreach($name as $name){
    echo "Hallo $name" . PHP_EOL;
}


// foreach using key 

$person = [
    "first_name" => "Dewa";
    "middle_name" => "Agung Ari";
    "last_name" => "Septiyadi";
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}

?>