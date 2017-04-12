<?php

namespace App\Interfaces;

interface ResponseFormat
{
    public function decode($data);
    
    public function encode($data);
}
