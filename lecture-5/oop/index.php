<?php



class User
{
    public $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->setAge($age);
    }

    public function setAge($age)
    {
        if (!is_int($age)) {
            echo "Age must be a number";
        } else if ($age > 0 && $age < 120) {
            $this->age = $age;
        } else {
            echo "Age must be a between 0 and 120";
        }
    }

    public function getAge()
    {
        return $this->age;
    }


    public function getUserFullInfo()
    {
        return 'User name is ' . $this->name . ' and age is ' . $this->age;
    }
}




$user = new User("Tonike", 24);


$userInfo =  $user->getUserFullInfo();


echo $userInfo;
