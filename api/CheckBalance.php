<?php

class CheckBalance {
    public function __construct () {
        include_once("User.php");
        include_once("UserController.php");
    }
    public function do(){
        $user = new User;
        $user->setId($_SESSION["user"]->id);
        $userController = new UserController;
        $result = $userController->checkBalance($user);
        return $result;
    }
}