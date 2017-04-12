<?php

//namespace App;

use App\Interfaces\ResponseFormat;

class User
{

    private $name;

    private $age;
    
    public function getUser(ResponseFormat $format)
    {
        return $format->encode(get_object_vars($this));
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }
}