<?php

include "16_test_object.php";

function count_db()
{
    $db = [
        "name" => "task16",
        "host" => "localhost",
        "port" => "3306",
        "user" => "root",
        "pwd" => ""
    ];

    $dsn = "mysql:dbname=" . $db["name"] . ";host=" . $db["host"] . ";port=" . $db["port"];
    $pdo = new PDO($dsn, $db["user"],$db["pwd"]);

    $sth = $pdo->prepare("SELECT count(object) FROM objects");
    $sth->execute();
    $data = $sth->fetchAll(PDO::FETCH_ASSOC);

    foreach ($data as $key =>$val) {
        $result = $val['count(object)'];
    }

    return $result;
}

function read_from_db($object_name)
{
    $db = [
        "name" => "task16",
        "host" => "localhost",
        "port" => "3306",
        "user" => "root",
        "pwd" => ""
    ];

    $dsn = "mysql:dbname=" . $db["name"] . ";host=" . $db["host"] . ";port=" . $db["port"];
    $pdo = new PDO($dsn, $db["user"],$db["pwd"]);

    $sth = $pdo->prepare("SELECT object FROM objects WHERE ob_name = :ob_name");
    $sth->execute(["ob_name" => $object_name]);
    $data = $sth->fetchAll(PDO::FETCH_ASSOC);

    $result = '';
    foreach ($data as $key =>$val) {
        if (empty($result)) {
            $result = unserialize($val['object']);
        }
    }

    return $result;
}

function write_to_db ($my_object)
{
    $db = [
        "name" => "task16",
        "host" => "localhost",
        "port" => "3306",
        "user" => "root",
        "pwd" => ""
    ];

    $dsn = "mysql:dbname=" . $db["name"] . ";host=" . $db["host"] . ";port=" . $db["port"];
    $pdo = new PDO($dsn, $db["user"],$db["pwd"]);
    $sth = $pdo->prepare("INSERT INTO `objects` (`ob_id`, `ob_name`, `object`) VALUES (NULL, :ob_name, :object)");

    var_dump($my_object);
    echo "<br>";
    echo "Запись объекта в БД:" . "<br>";
    var_dump($sth->execute(["ob_name" => get_class($my_object), "object" => serialize($my_object)]));
    echo "<br>";
}

$my_object = new MyObject;
$my_object->setAge(20);
$my_object->setLastname('poopkin');
$my_object->setName('vasya');

write_to_db($my_object);

echo "<br>";
echo "Чтение объекта из БД:" . "<br>";
var_dump(read_from_db('MyObject'));

echo "<br>";
echo "Количество записей в БД: " . count_db() . "<br>";