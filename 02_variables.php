<?php

// What is a variable

// Variable types

// Declare variables
$name = "abdul";
$age = 21 ;
$ismail = true;
$height = 1.8;
$salary = null;
// Print the variables. Explain what is concatenation
echo $name . '<br>';
echo $age . '<br>';
echo $ismail . '<br>';
echo $height . '<br>';
echo $salary . '<br>';
// Print types of the variables
echo gettype($name). "<br>" ;
echo gettype($age). "<br>" ;
echo gettype($ismail). "<br>" ;
echo gettype($height). "<br>" ;
echo gettype($salary). "<br>" ;
// Print the whole variable
var_dump($name , $age , $ismail , $height , $salary);
// Change the value of the variable
$name = false ;
// Print type of the variable
echo  gettype($name). "<br>";
// Variable checking functions
is_string($name). "<br>";
is_bool($age). "<br>";
is_double($ismail). "<br>";
// Constants
define('mygpa' , 3.5) ;
echo mygpa. "<br>";
// Using PHP built-in constants
echo SORT_ASC . "<br>" ;
echo PHP_INT_MAX . "<br>" ;