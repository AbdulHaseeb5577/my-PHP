<?php

// while
// while($counter <= 10){
//      echo $counter .'<br>';
//     // if($counter === 50){
//     //  break;}
//      $counter++;
// }
// Loop with $counter

// do - while
// do {
//     echo $counter .'<br>';;
//     $counter++;
// }while($counter < 0);

for($i = 0; $i < 10; $i++){
echo $i .'<br>';
}
// foreach
$fruits = ["apple", "banana", "oringe"];
foreach ($fruits as $i => $fruit){
    echo $i.' '.$fruit.'<br>';
}
// Iterate Over associative array.
