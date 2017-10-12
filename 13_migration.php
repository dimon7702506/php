<?php

define('FILE_NAME','12_chat.csv');
define('FILE_SQL_NAME','13_chat.sql');

function read_file($file):array
{
    $file_to_read = fopen($file, 'r');
    $mes = [];
    $row = [];
    while ($row = fgetcsv($file_to_read)) {
        array_push($mes, $row);
    }
    fclose($file_to_read);

    return $mes;
}

function make_sql_file($messages, $file):void
{
    foreach ($messages as $message){
        //$data_message = date('d-m-y H:i:s', (float)$message[0]);
        $data_message = date('y-m-d H:i:s', (float)$message[0]);
        $name = $message[1];
        $text_message = $message[2];
        $str = 'insert into messages (created, username, message) values(' . '"' . $data_message . '","' . $name
            . '","' . $text_message . '");' . PHP_EOL;
        echo $str. "<br>";
        $file_sql = fopen($file, 'a+');
        fwrite($file_sql, $str);
        fclose($file_sql);
    }
}

$file = FILE_NAME;
$messages = read_file($file);
make_sql_file($messages, FILE_SQL_NAME);


