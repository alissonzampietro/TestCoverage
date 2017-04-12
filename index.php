<?php
require __DIR__ . "/vendor/autoload.php";
require __DIR__."/app/User.php";
require __DIR__."/app/Helpers/Schema/Json.php";

/* use App\User;
use App\Helpers\Schema\Json; */

$user = new User();

$user->setName("Alisson")->setAge(22);

$json = new Json();

echo $user->getUser($json);