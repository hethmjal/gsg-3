<?php

class Course
{
    public static $identifier = 0;
    public readonly int $ID;
    public $name;

    
    public function __construct($name){
        $this->ID = self::$identifier + 1;
        self::$identifier++;
        $this->name = $name;
    }
    
    


}


