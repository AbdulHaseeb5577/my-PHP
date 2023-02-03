<?php

// Function which prints "Hello I am Zura"
// function show()
// {
//     echo "i am haseeb";
// }
// show() . '<br>';
// show() . '<br>';
// show() . '<br>';
// Function with argument
// function hello($name)
// {
//     return "i am $name";
// }
// echo hello('haseeb'). '<br>';
// echo hello('abdul'). '<br>';
// Create sum of two functions
// function sum($a, $b)
// {
//     return $a + $b;
// }
// echo sum(5, 9);
// function multiply($a, $b)
// {
//     return $a * $b;
// }
// echo multiply(4, 5);

// function divide($x, $y)
// {
//     return $x / $y;
// }
// echo divide(4, 2);

// Create function to sum all numbers using ...$nums
// function sum(...$nums)
// {
// $sum = 0;
// foreach($nums as $n)
// {
// $sum += $n;
// }
// return $sum;
// }
// echo sum(3, 5, 7, 5, 3, 6, 7);



// function mul(...$nums)
// {
// $mul = 1;
// foreach ($nums as $n ){
//     $mul *= $n;
// }
// return $mul;
// }
// echo mul(5, 6, 7, 7, 8, 55, 3);

// Arrow functions
function sum(...$nums)
{
return array_reduce($nums, fn($carry ,$n) => $carry+$n);
}
echo sum(3, 5, 7, 5, 3, 6, 7);