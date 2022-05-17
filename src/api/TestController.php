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
        $queryTestArr = array(  //insert into test
            ':username' => $array['username'],
            ':title' => $array['title'],
            ':course' => $array['course'],
        );
        $stmt = $this->conn->prepare("INSERT INTO `tests` (username, title, course)
             values (:username, :title, :course)");
        $stmt->execute($queryTestArr);
        $testId = $this->conn->lastInsertId();
        $queryQuestionArr = array(); //insert into questions
        $stmt = $this->conn->prepare(
            "INSERT INTO `questions` (testid, text, answera, answerb, answerc, goodanswer)
             values (:testid, :text, :answera, :answerb, :answerc, :goodanswer)");
        foreach($questionsHelp as $question){
            $queryQuestionArr[':testid'] = $testId;
            foreach($question as $key => $value){
                if($value == ':goodanswer'){
                    $queryQuestionArr[$value] = $array[$array[$key]];
                }
                else{
                    $queryQuestionArr[$value] = $array[$key];
                }   
            }
            $stmt->execute($queryQuestionArr);
        }
    }
    
   public function getTestTitlesByCourse(string $course){
        $stmt = $this->conn->prepare("SELECT id, title, course from `tests` where course = :course;");
        $stmt->bindParam(":course", $course, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
   }

   public function getCompleteTestByParams(string $id, string $username){
       if($id != '' && $username == ''){
            $queryArr = array(
                ':id' => $id,
            );
            $stmt = $this->conn->prepare("SELECT * FROM `tests` AS t INNER JOIN `questions` AS q ON t.id = q.testid
             WHERE t.id = :id;");
       }
       if($id == '' && $username != ''){
            $queryArr = array(
                ':username' => $username,
            );
            $stmt = $this->conn->prepare("SELECT * FROM `tests` AS t INNER JOIN `questions` AS q ON t.id = q.testid
             WHERE t.username = ':username';");
       }
        $stmt->execute($queryArr);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);        
   }
   
   public function getAllTests(){ //TODO questions missing
        $stmt = $this->conn->prepare("SELECT * from `tests`;");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
   }

   public function deleteTest(int $id){
        $queryArr = array(
            ':id' => $id,
        );
        $stmt = $this->conn->prepare("DELETE FROM `tests` WHERE id = :id;");
        $stmt->execute($queryArr);
   }

   public function getTestTitlesByUsername(string $username){
    $stmt = $this->conn->prepare("SELECT * from `tests` where username = :username;");
    $stmt->bindParam(":username", $username, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

    
    

    

    

   


   





}