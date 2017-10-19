<?php

$db = [
    "name" => "test",
    "host" => "localhost",
    "port" => "3306",
    "user" => "root",
    "pwd" => "",
];

$dsn = "mysql:dbname=" . $db["name"] . ";host=" . $db["host"] . ";port=" . $db["port"];
$pdo = new PDO($dsn, $db["user"],$db["pwd"]);

$sth = $pdo->prepare("SELECT * FROM user_role WHERE role_id = :role_id");
$sth->execute(["role_id" => 1]);
$data = $sth->fetchAll(PDO::FETCH_ASSOC);

var_dump($data);