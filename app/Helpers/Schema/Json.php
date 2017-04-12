<?php

//namespace App\Helpers\Schema;

use App\Interfaces\ResponseFormat;

class Json implements ResponseFormat
{
    public function decode($data, $isArray = TRUE)
    {
        return json_decode($data, $isArray);
    }
    
    public function encode($data)
    {
        return json_encode($data);
    }
}