<?php

class UserM
{

    protected $name;

    // setter
    public function setName($name)
    {
        if (!$name) {
            echo "This in invalid Name param";
        }
        $this->name = $name;
    }

    // getter
    public function getName()
    {
        return ucfirst($this->name);
    }
}

$user = new UserM();

$user->setName(null);
$user->setName("Tornike");

echo $user->getName();
