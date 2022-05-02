<?php
header ("Access-Control-Allow-Origin: *");
header ("Access-Control-Expose-Headers: Content-Length, X-JSON");
header ("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
header ("Access-Control-Allow-Headers: *");

require_once "Database.php";


class TestController{

    private PDO $conn;

    public function __construct(){
        $this->conn = (new Database())->getConnection();
    }

    public function addNewTest($array){
        $questionsHelp = [
            ['q1' => ':text', 'q1a1' => ':answera', 'q1a2' => ':answerb', 'q1a3' => ':answerc', 'q1_good_ans' => ':goodanswer'],
            ['q2' => ':text', 'q2a1' => ':answera', 'q2a2' => ':answerb', 'q2a3' => ':answerc', 'q2_good_ans' => ':goodanswer'],
            ['q3' => ':text', 'q3a1' => ':answera', 'q3a2' => ':answerb', 'q3a3' => ':answerc', 'q3_good_ans' => ':goodanswer'],
            ['q4' => ':text', 'q4a1' => ':answera', 'q4a2' => ':answerb', 'q4a3' => ':answerc', 'q4_good_ans' => ':goodanswer'],
            ['q5' => ':text', 'q5a1' => ':answera', 'q5a2' => ':answerb', 'q5a3' => ':answerc', 'q5_good_ans' => ':goodanswer'],
            ['q6' => ':text', 'q6a1' => ':answera', 'q6a2' => ':answerb', 'q6a3' => ':answerc', 'q6_good_ans' => ':goodanswer'],
            ['q7' => ':text', 'q7a1' => ':answera', 'q7a2' => ':answerb', 'q7a3' => ':answerc', 'q7_good_ans' => ':goodanswer'],
            ['q8' => ':text', 'q8a1' => ':answera', 'q8a2' => ':answerb', 'q8a3' => ':answerc', 'q8_good_ans' => ':goodanswer'],
            ['q9' => ':text', 'q9a1' => ':answera', 'q9a2' => ':answerb', 'q9a3' => ':answerc', 'q9_good_ans' => ':goodanswer'],
            ['q10' => ':text', 'q10a1' => ':answera', 'q10a2' => ':answerb', 'q10a3' => ':answerc', 'q10_good_ans' => ':goodanswer'],
            
        ];
        $queryQuestionArr = array();
        $queryTestArr = array(
            ':username' => $array['username'],
            ':title' => $array['title'],
            ':course' => $array['course'],
        );
        $stmt = $this->conn->prepare(
            "INSERT INTO `questions` (text, answera, answerb, answerc, goodanswer)
             values (:text, :answera, :answerb, :answerc, :goodanswer)");
        $qIdKey = '';
        foreach($questionsHelp as $question){
            foreach($question as $key => $value){
                if($value == ':text'){
                    $qIdKey = ':'.$key;
                    $queryQuestionArr[$value] = $array[$key];
                }
                else if($value == ':goodanswer'){
                    $queryQuestionArr[$value] = $array[$array[$key]];
                }
                else{
                    $queryQuestionArr[$value] = $array[$key];
                }   
            }
            $stmt->execute($queryQuestionArr);
            $queryTestArr[$qIdKey] = $this->conn->lastInsertId();
        }
        
        $stmt = $this->conn->prepare(
            "INSERT INTO `test` (username, title, course, question1,
            question2, question3, question4, question5, question6, question7, question8, question9, question10)
             values (:username, :title, :course, :q1, :q2, :q3, :q4, :q5, :q6, :q7, :q8, :q9, :q10)");
        $stmt->execute($queryTestArr);



        //$q1Id = $this->conn->lastInsertId();
        // $qd2 = array(
        //     ':text' => $array['q2'],
        //     ':answera' => $array['q2a1'],
        //     ':answerb' => $array['q2a2'],
        //     ':answerc' => $array['q2a3'],
        //     ':goodanswer' => $array[$array['q2_good_ans']],
        // );
        // $stmt = $this->conn->prepare(
        //             "INSERT INTO `questions` (text, answera, answerb, answerc, goodanswer)
        //              values (:text, :answera, :answerb, :answerc, :goodanswer)");
        // $stmt->execute($qd2);
        //$q2Id = $this->conn->lastInsertId();
    }
    
    // public function registration(User $person){
    //     $query_data = array(
    //         ':firstname' =>  $person->getFirstname(),
    //         ':lastname' =>  $person->getLastname(),
    //         ':username' =>  $person->getUsername(),
    //         ':email' =>  $person->getEmail(),
    //         ':pw' =>  $person->getPassword(),
    //         ':role' =>  $person->getRole(),
    //        );
    //     $stmt = $this->conn->prepare(
    //         "INSERT INTO `login` (firstname, lastname, username, email, pw, role)
    //          values (:firstname, :lastname, :username, :email, :pw, :role)");
    //     $stmt->execute($query_data);
    // }

    // public function checkIfUsernameExists(string $username):bool {
    //     $stmt = $this->conn->prepare("SELECT username from `login` where username = :username;");
    //     $stmt->bindParam(":username", $username, PDO::PARAM_STR);
    //     $stmt->execute();
    //     if($stmt->fetch(PDO::FETCH_COLUMN)){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }
    

    // public function insertUser(User $person): int
    // {
    //     $stmt = $this->conn->prepare("insert into user (name, surname, email, username, password) values (:name, :surname, :email, :username, :password);");
    //     $name = $person->getName();
    //     $surname = $person->getSurname();
    //     $email = $person->getEmail();
    //     $username = $person->getUsername();
    //     $password = $person->getPassword();

    //     $stmt->bindParam(":name", $name, PDO::PARAM_STR);
    //     $stmt->bindParam(":surname", $surname, PDO::PARAM_STR);
    //     $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    //     $stmt->bindParam(":username", $username, PDO::PARAM_STR);
    //     $stmt->bindParam(":password", $password, PDO::PARAM_STR);

    //     $stmt->execute();
    //     return $this->conn->lastInsertId();
    // }

    // public function getUserEmail($username):string{
    //     $stmt = $this->conn->prepare("select user.email from user where user.username=:username;");
    //     $stmt->bindParam(":username", $username, PDO::PARAM_STR);
    //     $stmt->execute();
    //     //$stmt->setFetchMode(PDO::FETCH_CLASS, "User");
    //     $tmp_email = $stmt->fetch();
    //     return $tmp_email[0];
    // }

    // public function logUser($username, $email, $logintype):void{
    //     $stmt = $this->conn->prepare("insert into login (username, email, logintype, logintime) values (:username, :email, :logintype, :logintime);");
    //     $stmt->bindParam(":username", $username, PDO::PARAM_STR);
    //     $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    //     $stmt->bindParam(":logintype", $logintype, PDO::PARAM_STR);
    //     date_default_timezone_set('Europe/Bratislava');
    //     $logintime = date("d-m-Y h:i:s a", time());
    //     $stmt->bindParam(":logintime", $logintime, PDO::PARAM_STR);
    //     $stmt->execute();
    // }


   





}