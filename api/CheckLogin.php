<?php
include_once("User.php");
include_once("UserController.php");
if (isset($_POST["email"]) && isset($_POST["password"])) {
    if ($_POST["email"] != null && $_POST["password"] != null) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $user = new User;
        $user->setEmail($email);
        $user->setPassword($password);
        $userController = new UserController;
        $result = $userController->validateLogin($user);
        echo $result;
        var_dump($user);
    } else {
        error();
    }
} else {
    error();
}

function error()
{
    $result = array("result" => "error");
    $result = json_encode($result);
    echo $result;
}