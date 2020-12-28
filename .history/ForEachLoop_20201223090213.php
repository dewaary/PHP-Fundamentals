<?php 

// Using Index

// $name = ["Dewa", "Gede", "Agung", "Ari"];

// for ($i = 0; $i < count($name); $i++){
//     echo "Data ke $i = $name[$i]". PHP_EOL;
// }

// foreach($name as $name){
//     echo "Hallo $name" . PHP_EOL;
// }


// // foreach using key 

// $person = [
//     "first_name" => "Dewa",
//     "middle_name" => "Agung Ari",
//     "last_name" => "Septiyadi",
// ];

// foreach ($person as $key => $value) {
//     echo "$key : $value" . PHP_EOL;
// }

// $cemah = true;

// if ($cemah) {
//     function sayHello(){
//         echo "Hi wayan, how are you ?" . PHP_EOL;
//     }
//     return sayHello();
// }

class cemah {
    public function __construct($data) {
    $this->nama = $data;
    }
    public function answer ($string) {
    return $string.$this->nama.PHP_EOL;
    }
    }
    
    $jawab = new cemah("gung aji");
    echo $jawab->answer("im fine bro ");



?>