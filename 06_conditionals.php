<?php

$age = 20;
$salary = 300000;

// // Sample if
// if ($age === 20)
// {
// echo '1';
// }
// // Without circle braces
// if ($age === 20) echo '1';

// // Sample if-else
// if ($age > 40)
// {
// echo '1';
// }
// else{
//     echo '2';
// }
// // Difference between == and ===
// if ($age == 20)
// {
// echo '1'. "<br>";
// }
// if ($age === '20')
// {
// echo '2'. "<br>";
// }
// // if AND
// if ($age === 20 && $salary == 300000)
// {
// echo 'do something'. "<br>";
// }
// // if OR
// if ($age === 20 || $salary == 300000)
// {
// echo 'do something'. "<br>";
// }
// // Ternary if
// echo $age < 22 ? 'young' : 'old';
// // // Short ternary
// // $myname = isset($name) ? $name : 'abdul';
// // $myname = $name ?? 'haseeb';
// // // Null coalescing operator

// switch
$myname = 'abdul haseeb';
switch($myname){
case 'abdul':
echo 'ohh no';
break;

case 'haseeb':
echo 'ohh no no';
break;

case 'abdulhaseeb':
    echo 'no';
    break;

case 'abdul haseeb':
echo 'yes';
break;
default:
echo 'abay sale';
}