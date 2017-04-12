<?php

//namespace App;

use App\Interfaces\ResponseFormat;

class User
{

    private $name;

    private $age;
    
    private $city;
    
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
    
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }
    
    public function getCity()
    {
        return $this->city;
    }
    
    public function isUser()
    {
        var_dump($this);
    }
}