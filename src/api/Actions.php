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
   // echo 'THIS IS THE REGISTER RESPONSE';
   $user = new User();
   $user->setFirstname($_POST['firstname']);
   $user->setLastname($_POST['lastname']);
   $user->setUsername($_POST['username']);
   $user->setEmail($_POST['email']);
   $user->setPassword($_POST['password']);
   $user->setRole($_POST['role']);
   echo json_encode($userController->registration($user));
}





?>