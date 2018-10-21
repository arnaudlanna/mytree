<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location: ./");
}
DEFINE('SERVER', "mysql:host=localhost;dbname=nasa");
DEFINE('USER', "root");
DEFINE('PASSWORD', "");