<?php

require "../vendor/autoload.php";



use App\Group;
use App\Student;
use App\Models\User as MUser;
use App\Auth\User;





$user = new MUser;
$group = new Group("PHP Group");
$student1 = new  Student("Dato", "Davitadze");

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
