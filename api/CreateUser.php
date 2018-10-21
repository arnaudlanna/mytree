<?php
session_start();
include_once("User.php");
include_once("UserController.php");
if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["phone"]) && isset($_POST["name"])) {
    if ($_POST["email"] != null && $_POST["password"] != null && $_POST["phone"] != null && $_POST["name"] != null) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $phone = $_POST["phone"];
        $name = $_POST["name"];
        $user = new User;
        $user->setEmail($email);
        $user->setPassword($password);
        $user->setPhone($phone);
        $user->setName($name);
        $userController = new UserController;
        $result = $userController->createUser($user);
        echo $result;
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