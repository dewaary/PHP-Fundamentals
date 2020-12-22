<?php 

$nilai = "A";


// switch($nilai){
//     case "A":
//         echo "Anda lulus dengan sangat baik" . PHP_EOL;
//     break;
//     case "B":
//         echo "Anda lulus" . PHP_EOL;
//     break;
//     case "C":
//         echo "Anda lulus" . PHP_EOL;
//     break;
//     case "D":
//         echo "Anda tidak lulus" . PHP_EOL;
//     break;
//     default:
//         echo "Anda harus mengulang mata kuliah ini" . PHP_EOL;
// }


// Syntax Alternatif

switch($nilai) :
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
    break;
    case "B":
        echo "Anda lulus" . PHP_EOL;
    break;
    case "C":
        echo "Anda lulus" . PHP_EOL;
    break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
    break;
    default:
        echo "Anda harus mengulang mata kuliah ini" . PHP_EOL;
endswitch;

?>