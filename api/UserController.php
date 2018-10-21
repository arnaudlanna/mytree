<?php
class UserController {

    function __construct()
    {
        session_start();
        $this->pdo = new PDO("mysql:host=localhost;dbname=nasa", "root", "");
    }

    function checkEmail($user){
        $stmt = $this->pdo->prepare("SELECT * FROM `user` WHERE `email` = ?");
        $stmt->execute([$user->getEmail()]);
        $user = $stmt->fetchAll();

        if($user){
            $result = array("result" =>"success");
            $result = json_encode($result);
            return $result;
        }
        else{
            $result = array("result" => "fail");
            $result = json_encode($result);
            return $result;
        }
    } 

    function validateLogin($user) {
        $stmt = $this->pdo->prepare("SELECT `name`, `email`, `phone` FROM `user` WHERE `email` = ? AND `password` = ?");
        $stmt->execute([$user->getEmail(), $user->getPassword()]);
        $user = $stmt->fetchObject();

        if ($user) {
            $result = array("result" => "success");
            $result = json_encode($result);
            $_SESSION["user"] = $user;
            return $result;
        } else {
            $result = array("result" => "fail");
            $result = json_encode($result);
            return $result;
        }
    }

    function createUser($user)
    {
        $stmt = $this->pdo->prepare("INSERT INTO `user` (`id`, `email`, `password`, `name`, `phone`) VALUES (NULL, ?, ?, ?, ?);");
        $success = $stmt->execute([$user->getEmail(), $user->getPassword(), $user->getName(), $user->getPhone()]);
        var_dump($success);
        $_SESSION["user"] = $user;
        if ($success) {
            $result = array("result" => "success");
            $result = json_encode($result);
            return $result;
        } else {
            $result = array("result" => "fail");
            $result = json_encode($result);
            return $result;
        }
    }

}
?>