<?php

namespace App;


class Group
{

    public $name;
    public $students = [];
    public $price;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }


    public function addStudent($student)
    {
        $this->students[] = $student;
        return $student;
    }

    public function getRevenue()
    {
        if (!$this->price) {
            echo "Price have not been setted for " . $this->name;
            return;
        }

        return $this->name . " has generated " . count($this->students) * $this->price . " Gel";
    }

    public function getStudentsInfo()
    {
        $studentsInfo = '';
        foreach ($this->students as $student) {
            $studentsInfo =  $studentsInfo . "<br>" .  $student->getStudentInfo();
        }
        return $studentsInfo;
    }


    public function getFailedStudentsList()
    {
        $studentsInfo = '';
        foreach ($this->students as $student) {
            if (!$student->hasStudentPassed()) {
                $studentsInfo =  $studentsInfo . "<br>" .  $student->getStudentInfo();
            }
        }
        return $studentsInfo;
    }
}
