<?php
header("content-type: application/json");
require_once "User.php";
require_once "UserController.php";

$userController = new UserController();

if($_POST['action'] == 'login'){    
    // $stmt = $conn->prepare("SELECT username, pw, role FROM `login` where username = :username and pw = :password");
    // $stmt->execute($query_data);
    // while($row = $stmt->fetch(PDO::FETCH_ASSOC))
    // {
    //  $data[] = $row;
    // }
    // echo json_encode($data);
    // echo json_encode($stmt->fetch(PDO::FETCH_ASSOC));
    echo json_encode(($userController->login($_POST['username']))->expose());
}

if($_POST['action'] == 'register'){
   $tmp = $userController->checkIfUsernameExists($_POST['username']);
    if($tmp){ 
        //user exists
        echo json_encode($tmp);
    }
    else{ 
        // user not exists 
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





?>