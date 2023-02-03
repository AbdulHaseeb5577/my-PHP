<?php
require_once "person.php";
class student extends person{
    public string $studentId;
    public function __construct($name, $username, $studentId)
    {
        $this->studentId = $studentId;
        parant::__construct($name, $username);
    }
}