<?php
header("content-type: application/json");
require_once "User.php";
require_once "UserController.php";
require_once "TestController.php";

$userController = new UserController();
$testController = new TestController();

if($_POST['action'] == 'login' || $_POST['action'] == 'autologin'){
    $person = null;
    if($_POST['action'] == 'login'){
        $person = $userController->login($_POST['email'],'',''); //login
    }else{
        $person = $userController->login('',$_POST['role'], $_POST['token']); //autologin
    }
    if($person){
        echo json_encode($person->expose());
    }else{
        echo json_encode($person); // return false
    }
}

if($_POST['action'] == 'register'){
   $tmp = $userController->checkIfUsernameOrEmailExists($_POST['username'], $_POST['email']);
   if($tmp == 'username and email exists'){
        echo json_encode('username and email exists');
    }
    else if($tmp == 'username exists'){
        echo json_encode('username exists');
    }
    else if($tmp == 'email exists'){
        echo json_encode('email exists');
    }
    else{ 
        // username and email not exists
        $user = new User();
        $user->setFirstname($_POST['firstname']);
        $user->setLastname($_POST['lastname']);
        $user->setUsername($_POST['username']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        $user->setRole($_POST['role']);
        try{
            $userController->registration($user);
            echo json_encode($tmp);
        }catch(PDOException $exception){
            echo json_encode($exception->getMessage());
        }
    }
}

if($_POST['action'] == 'createNewTest'){
     //TODO check for the title if exists for this course
    try{
        $testController-> addNewTest($_POST);
        echo json_encode("Test was Successfully uploaded to Database!");
    }catch(PDOException $exception){
        echo json_encode($exception->getMessage());
    }
}

if($_POST['action'] == 'getTestTitles'){
    echo json_encode($testController->getTestTitlesByCourse($_POST['course']));
}

if($_POST['action'] == 'getCompleteTest'){
    try{
       $dbData = $testController->getCompleteTestByParams($_POST['id'],$_POST['course'],$_POST['title']);
       echo json_encode($dbData);
        // echo json_encode($testController->getCompleteTestByParams($_POST['id'],$_POST['course'],$_POST['title']));
    }catch(PDOException $exception){
        echo json_encode($exception->getMessage());
    }
}

if($_POST['action'] == 'getAllUsers'){ 
    try{
        echo json_encode($userController->getAllUsers());
    }catch(Error $exception){
        echo json_encode($exception->getMessage());
    }
}



?>