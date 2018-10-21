<?php
session_start();
include_once("User.php");
include_once("UserController.php");
if(isset($_POST["email"])){
    if($_POST["email"] != null){
        $email = $_POST["email"];
        $user = new User;
        $user->setEmail($email);
        $userController = new UserController;
        $result = $userController->checkEmail($user);
        echo $result;
    } else {
        error();
    }
}
else{
    error();
}

function error(){
    $result = array("result" => "error");
    $result = json_encode($result);
    echo $result;
}