<?php
include_once("config.php");
include_once("api/CheckBalance.php");
$pdo = new PDO("mysql:host=localhost;dbname=nasa", "root", "");
$specie = $_POST["specie"];
$nickname = $_POST["nickname"];
$latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];
$stmt = $pdo->prepare("INSERT INTO `tree` (`id`, `lat`, `lng`, `specie`, `age`, `nickname`, `owner_id`) VALUES (NULL, ?, ?, ?, 0, ?, ?);");
$success = $stmt->execute([$latitude, $longitude, $specie, $nickname, $_SESSION["user"]->id]);
$stmt = $pdo->prepare("UPDATE `user` SET balance = ? WHERE id = ?;");
$chkbal = new CheckBalance;
$bal = $chkbal->do();
$bal = $bal + 1000;
$success = $stmt->execute([$bal, $_SESSION["user"]->id]);
header('location: ./'); 