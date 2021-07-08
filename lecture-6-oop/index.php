<?php

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




$group = new Group("PHP Group");

// $group->setPrice(500);



$student1 = new Student("Dato", "Davitadze");
$student1->addPoint(40);
$student1->addPoint(15);


$student2 = new Student("Gio", "Davitadze");
$student2->addPoint(40);


$student3 = new Student("Luka", "Gvv");
$student3->addPoint(20);
$student3->addPoint(35);

$group->addStudent($student1);
$group->addStudent($student2);
$group->addStudent($student3);

// echo $student1->getStudentInfo();


// echo $group->getRevenue();







echo "ALl Users";
echo $group->getStudentsInfo();




echo "<br>";


echo "List failed Students :";
echo $group->getFailedStudentsList();




// $group->addStudent(new Student("Gio", "Davitadze", 0));
// $group->addStudent(new Student("Luka", "Davitadze", 0));
// $group->addStudent(new Student("Lasha", "Davitadze", 0));
// $group->addStudent(new Student("Nika", "Davitadze", 0));


// print_r($group->students);







class UserP
{

    public $name;

    public function setName($name)
    {
        $this->name = $name;
    }
}


// $name = "L";
// $name = $name . "A";
// $name .=  "B";
