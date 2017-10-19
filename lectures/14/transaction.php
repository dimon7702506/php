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

$pdo->beginTransaction();

$pdo->exec("DELETE FROM users where id = 1");

$success = true;

if ($success) {
    $pdo->commit();
} else {
    var_dump("rollback");
    $pdo->rollBack();
}