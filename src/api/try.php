<?php
header("content-type: application/json");
require_once "User.php";
require_once "UserController.php";
require_once "TestController.php";
$userController = new UserController();
$testController = new TestController();


    $user = new User();
        $user->setId(29);
        $user->setFirstname('greg');
        $user->setLastname('greg');
        $user->setUsername('greg3');
        $user->setEmail('greg@vfbfgb.vo');
        $user->setPassword(password_hash("greggreg", PASSWORD_DEFAULT));
        $user->setRole('teacher');
        try{
            $userController->editUser($user);
            echo json_encode('Success');
        }catch(PDOException $exception){
            echo json_encode($exception->getMessage());
        }





?>