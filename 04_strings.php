<?php

// Create simple string
$name = 'haseeb';
$string1 = 'hello my name is '.$name.' nd i am 21';
$string2 = "hello my name is $name and i am 24";
echo $string1 . "<br>";
echo $string2 . "<br>";


// String concatenation

// String functions

// Multiline text and line breaks
$longtext = "
may name is haseeb,
my age is 24,
and,
i love my friends,
";
echo $longtext ."<br>";
echo nl2br($longtext);

// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php