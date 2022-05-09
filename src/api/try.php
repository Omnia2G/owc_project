<?php
header("content-type: application/json");
require_once "User.php";
require_once "UserController.php";
require_once "TestController.php";
$userController = new UserController();
$testController = new TestController();

$person = $userController->login('admin1@admin.com','','');
if($person){
    echo json_encode($person->expose());
}else{
    echo json_encode($person);
}


// $pw = password_hash('admin1', PASSWORD_DEFAULT);
// echo $pw, "<br>";
// if( password_verify('admin1', $pw )){
//     echo 'true';
// }else{
//     echo 'false';
// }

// echo sha1(time())."<br>";
// var_dump(sha1(time()));




?>