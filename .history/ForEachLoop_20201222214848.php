<?php 

$name = ["Dewa", "Gede", "Agung", "Ari"];

for ($i = 0; $i < count($name); $i++){
    echo "Data ke $i = $name[$i]". PHP_EOL;
}

foreach($name as $name){
    echo "Data ke $name" . PHP_EOL;
}


?>