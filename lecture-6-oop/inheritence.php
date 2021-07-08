<?php

class BaseUser
{
    protected $name;
    protected $surname;


    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}






class Customer extends BaseUser
{
    public function getNameCustomer()
    {
        return $this->name;
    }
}


class Admin  extends BaseUser
{
}


$customer = new Customer;

$customer->setName("Customer name");

// echo $customer->getName();

echo $customer->getNameCustomer();


echo "<br>";



// $admin->name;


$admin = new Admin;

$admin->setName("Admin name");

// echo $admin->getName();
