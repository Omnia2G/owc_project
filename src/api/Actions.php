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

if($_POST['action'] == 'getTestsByUsername'){
   echo json_encode($testController->getTestTitlesByUsername($_POST['username']));
}

if($_POST['action'] == 'getCompleteTestById' || $_POST['action'] == 'getCompleteTestsByUsername'){
    if($_POST['action'] == 'getCompleteTestById'){
        try{
        $dbData = $testController->getCompleteTestByParams($_POST['id'], '');
        echo json_encode($dbData);
        }catch(PDOException $exception){
            echo json_encode($exception->getMessage());
        }
    }
    if($_POST['action'] == 'getCompleteTestsByUsername'){
        try{
        $dbData = $testController->getCompleteTestByParams('', $_POST['username']);
        echo json_encode($dbData);
        }catch(PDOException $exception){
            echo json_encode($exception->getMessage());
        }
    }
}

if($_POST['action'] == 'getAllUsers'){ 
    try{
        echo json_encode($userController->getAllUsers());
    }catch(Error $exception){
        echo json_encode($exception->getMessage());
    }
}

if($_POST['action'] == 'getAllTests'){ 
    try{
        echo json_encode($testController->getAllTests());
    }catch(Error $exception){
        echo json_encode($exception->getMessage());
    }
}

if($_POST['action'] == 'deleteTest'){ 
    try{
        $testController->deleteTest($_POST['id']);
    }catch(Error $exception){
        echo json_encode($exception->getMessage());
    }
}

if($_POST['action'] == 'deleteUser'){ 
    try{
        $userController->deleteUser($_POST['id']);
    }catch(Error $exception){
        echo json_encode($exception->getMessage());
    }
}

if($_POST['action'] == 'editUser'){ 
    $user = new User();
    $tmp = null;
    $email = null;
    $username = null;
    if($_POST['oldUsername'] != $_POST['username'] && $_POST['oldEmail'] != $_POST['email']){
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
            $tmp = false;
        }
    }
    else if($_POST['oldUsername'] != $_POST['username'] && $_POST['oldEmail'] == $_POST['email']){
        $username = $userController->checkUsername($_POST['username'], $_POST['id']);
        if($username){
            echo json_encode("username exists");
        }
    }
    else if($_POST['oldUsername'] == $_POST['username'] && $_POST['oldEmail'] != $_POST['email']){
        $email = $userController->checkEmail($_POST['email'], $_POST['id']);
        if($email){
            echo json_encode("email exists");
        }
    }
    if(!$username && !$email && !$tmp){
        $user->setId($_POST['id']);
        $user->setFirstname($_POST['firstname']);
        $user->setLastname($_POST['lastname']);
        $user->setUsername($_POST['username']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        $user->setRole($_POST['role']);
        try{
            $userController->editUser($user);
            echo json_encode('Success');
        }catch(PDOException $exception){
            echo json_encode($exception->getMessage());
        }
    }
}
?>