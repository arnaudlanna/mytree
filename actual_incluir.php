<?php
include_once("config.php");
$pdo = new PDO("mysql:host=localhost;dbname=nasa", "root", "");
$specie = $_POST["specie"];
$nickname = $_POST["nickname"];
$stmt = $pdo->prepare("INSERT INTO `tree` (`id`, `lat`, `lng`, `specie`, `age`, `nickname`, `owner_id`) VALUES (NULL, ?, ?, ?, 0, ?, ?);");
$success = $stmt->execute(["-19.9679941", "-43.9540356", $specie, $nickname, $_SESSION["user"]->id]);
header('location: ./');

