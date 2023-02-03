<?php

// Create array
$fruits = ["apple", "banana", "pine apple"];

// Print the whole array
echo "<pre>";
var_dump($fruits);
echo "</pre>";
// Get element by index
echo $fruits[1];

// Set element by index
$fruits[1] = 'peach';


// Check if array has element at index 2
echo "<pre>";
var_dump($fruits);
echo "</pre>";
// Append element
$fruits[] = 'banana';
echo "<pre>";
var_dump($fruits);
echo "</pre>";
// Print the length of the array
echo count($fruits);
// Add element at the end of the array
array_push($fruits, 'foo');
echo "<pre>";
var_dump($fruits);
echo "</pre>";
// Remove element from the end of the array
echo array_pop($fruits);
// Add element at the beginning of the array
array_unshift($fruits, 'foo');
echo "<pre>";
var_dump($fruits);
echo "</pre>";
// Remove element from the beginning of the array
array_shift($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";
// Split the string into an array
$sarray = "abdul . haseeb . hassan";
echo "<pre>";
var_dump(explode('.', $sarray));
echo "</pre>";
// Combine array elements into string
echo implode("&", $fruits);

// Check if element exist in the array
echo "<pre>";
var_dump(in_array('apple', $fruits));
echo "</pre>";
// Search element index in the array

// Merge two arrays
$vegitable = ["potota", "tomatato"];
echo "<pre>";
var_dump(array_merge($fruits, $vegitable));
var_dump([...$vegitable, ...$fruits]);
echo "</pre>";
// Sorting of array (Reverse order also)
sort($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";

rsort($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================
$person = [
    'name' => 'abdul',
    'surname' => 'haseeb',
    'age' => '22',
    'hobbies' => ['tannis', 'football'],
];
echo "<pre>";
print_r($person);
echo "</pre>";

echo $person['nameeee']. '<br>';

// Get element by key

// Set element by key

// Null coalescing assignment operator. Since PHP 7.4
// if (!isset($person['adress'])){
// $person['adress'] = 'unknown';
// };
$person['adress'] ??=  'unknown';
echo "<pre>";
var_dump($person);
echo "</pre>";
// Check if array has specific key

// Print the keys of the array
echo "<pre>";
var_dump(array_keys($person));
echo "</pre>";
// Print the values of the array
echo "<pre>";
var_dump(array_values($person));
echo "</pre>";
// Sorting associative arrays by values, by keys
asort($person);
echo "<pre>";
var_dump($person);
echo "</pre>";

// Two dimensional arrays
$abdul = [
['titleee' => '1', 'comp' => true],
['titleee' => '2', 'comp' => false],
];
echo "<pre>";
var_dump($abdul);
echo "</pre>";