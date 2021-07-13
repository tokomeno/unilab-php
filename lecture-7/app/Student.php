<?php

namespace App;

class Student
{
    public $name;
    public $surname;
    public $point = 0;


    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function addPoint($point)
    {
        // $this->point = $this->point + $point; 
        $this->point += $point;
    }


    public function getStudentInfo()
    {
        return "name: {$this->name}, surname: {$this->surname}, point: {$this->point}";
    }

    public function hasStudentPassed()
    {
        // if ($this->point > 50) {
        //     return true;
        // } else {
        //     return false;
        // }
        return $this->point > 50;
    }
}
