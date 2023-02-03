<?php

// Declaring numbers
$a = 5;
$b = 8;
$c = 5.2;
// Arithmetic operations
echo ($a + $b) * $c . "<br>";
echo $a - $b. "<br>";
echo $a + $b. "<br>";
echo $a / $b. "<br>";
echo $a % $b. "<br>";  
// Assignment with math operators

// $a += $b; echo $a. "<br>" ;
// $a %= $b; echo $a. "<br>" ;
// $a -= $b; echo $a. "<br>" ;
// $a *= $b; echo $a. "<br>" ;
// Increment operator
echo $a++. "<br>" ;
echo ++$a. "<br>" ;
// Decrement operator
echo $a--. "<br>" ;
echo --$a. "<br>" ;
// Number checking functions
$sttrnumber = "3.123";
$number = (float)$sttrnumber;
var_dump($number);
// Conversion

// Number functions

// Formatting numbers
echo "<br>";
$number = 1432343245.453453;
echo number_format($number, 2, ',', ' ');
// https://www.php.net/manual/en/ref.math.php
