<?php
class person{
    public $name;
    public $surname;
    private $age;
    public static $counter = 0;

    public function __construct($name, $surname){
        $this->name = $name;
        $this->surname = $surname;
        self::$counter++;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public static function getCounter(){
        return self::$counter;
    }
}