<?php
class UserController {

    function __construct()
    {
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

    function checkBalance($user){
        $stmt = $this->pdo->prepare("SELECT balance FROM `user` WHERE `id` = ?");
        $stmt->execute([$user->getId()]);
        $user = $stmt->fetch();

        return $user["balance"];
    } 

    function validateLogin($user) {
        $stmt = $this->pdo->prepare("SELECT `id`, `name`, `email`, `phone` FROM `user` WHERE `email` = ? AND `password` = ?");
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