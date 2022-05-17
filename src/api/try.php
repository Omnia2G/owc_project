<?php
header("content-type: application/json");
require_once "User.php";
require_once "UserController.php";
require_once "TestController.php";
$userController = new UserController();
$testController = new TestController();

echo "TRY ";
$person = $userController->login('admin1@admin.com','','');
var_dump($person);





?>