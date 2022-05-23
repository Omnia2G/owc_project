<?php
header ("Access-Control-Allow-Origin: *");
header ("Access-Control-Expose-Headers: Content-Length, X-JSON");
header ("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
header ("Access-Control-Allow-Headers: *");

require_once "Database.php";
require_once "User.php";

class UserController{

    private PDO $conn;

    public function __construct(){
        $this->conn = (new Database())->getConnection();
    }

    public function login(string $email, string $role, string $token){
        if($email && $role === '' && $token === ''){
            $query_data = array(
                ':email' =>  $email,
               );
            $stmt = $this->conn->prepare("SELECT * FROM `login` where email = :email;");
        }else{ // autologin
            $query_data = array(
                ':role' => $role,
                ':token' =>  $token,
               );
            $stmt = $this->conn->prepare("SELECT * FROM `login` where token = :token and role = :role;");
        }
        $stmt->execute($query_data);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "User");
        $person = $stmt->fetch();
        return $person; 
    }

    public function registration(User $person){
        $query_data = array(
            ':firstname' =>  $person->getFirstname(),
            ':lastname' =>  $person->getLastname(),
            ':username' =>  $person->getUsername(),
            ':email' =>  $person->getEmail(),
            ':pw' =>  $person->getPassword(),
            ':role' =>  $person->getRole(),
            ':token' => sha1(time()),
           );
        $stmt = $this->conn->prepare(
            "INSERT INTO `login` (firstname, lastname, username, email, pw, role, token)
             values (:firstname, :lastname, :username, :email, :pw, :role, :token)");
        $stmt->execute($query_data);
    }

    public function checkIfUsernameOrEmailExists(string $username, string $email):string {
        $stmt = $this->conn->prepare("SELECT username from `login` where username = :username;");
        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->execute();
        $usernameExists = $stmt->fetch(PDO::FETCH_COLUMN);
        $stmt = $this->conn->prepare("SELECT email from `login` where email = :email;");
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        $emailExists = $stmt->fetch(PDO::FETCH_COLUMN);
        if($usernameExists && $emailExists){
            return 'username and email exists';
        }
        else if($usernameExists && !$emailExists){
            return 'username exists';
        }
        else if(!$usernameExists && $emailExists){
            return 'email exists';
        }
        else{
            return 'none of them exists';
        }
    }

    public function getAllUsers() {
        $stmt = $this->conn->prepare("SELECT * from `login` order by username ASC;");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);    
    }

    public function getUserByUsername(string $username){
        $stmt = $this->conn->prepare("SELECT * from `login` WHERE username = :username;");
        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); 
    }
    
    public function deleteUser(int $id){
        $queryArr = array(
            ':id' => $id,
        );
        $stmt = $this->conn->prepare("DELETE FROM `login` WHERE id = :id;");
        $stmt->execute($queryArr);
    }

    public function editUser(User $person){
        $query_data = array(
            ':id' => $person->getId(),
            ':firstname' =>  $person->getFirstname(),
            ':lastname' =>  $person->getLastname(),
            ':username' =>  $person->getUsername(),
            ':email' =>  $person->getEmail(),
            ':pw' =>  $person->getPassword(),
            ':role' =>  $person->getRole(),
           );
        $stmt = $this->conn->prepare(
            "UPDATE `login` SET firstname = :firstname, lastname = :lastname, username = :username, email = :email, pw = :pw, role = :role
            WHERE id = :id;");
        $stmt->execute($query_data);
    }

    public function checkEmail(string $email, int $id):bool {
        $query_data = array(
            ':id' => $id,
            ':email' =>  $email,
        );
        $stmt = $this->conn->prepare(
            "SELECT email FROM `login` WHERE email = :email AND id NOT IN (:id);");
        $stmt->execute($query_data);
        $res = $stmt->fetch(PDO::FETCH_COLUMN);
        if($res){
            return true;
        }
        else{
            return false;
        }
    }

    public function checkUsername( string $username, int $id):bool {
        $query_data = array(
            ':id' => $id,
            ':username' =>  $username,
        );
        $stmt = $this->conn->prepare(
            "SELECT username FROM `login` WHERE username = :username AND id NOT IN (:id);");
        $stmt->execute($query_data);
        $res = $stmt->fetch(PDO::FETCH_COLUMN);
        if($res){
            return true;
        }
        else{
            return false;
        }
    }
   

}