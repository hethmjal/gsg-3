<?php

class Student 
{
    public static $identifier = 0;
    public readonly int $ID;

    public $name;
    public $email;
    public $courses =[];

    public function __construct($name,$email,$courses ){
        $this->ID = self::$identifier + 1;
        self::$identifier++;

        $this->name= $name;
        $this->email = $email;
        $this->courses = $courses;
    }
    



}







































