<?php

// What is class and instance

require_once "person.php";
require_once "student.php";


$studen = new Student("abdul", "haseeb", "26345");

$p = new person('abdul', 'haseeb');
$p->name = 'abdul';
$p->surname ='haseeb';
$p->setage = (56) ;
echo '<pre>';
var_dump($studen);
echo '</pre>';
echo person::getCounter();
// echo $p->name;
// echo $p->surname;
// echo $p->surname;
// echo $p->age;
// Create Person class in Person.php

// Create instance of Person

// Using setter and getter