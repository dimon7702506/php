<?php

define('CHAT_FILE_NAME', '12_chat.csv');

function write_to_file($user_name, $message):void
{
    $list = [
        'time' => (float) microtime(true),
        'user' => $user_name,
        'message' => $message
    ];

    $file = fopen(CHAT_FILE_NAME, 'a+');
    fputcsv($file, $list);
    fclose($file);
}

function read_messages($param_microtime):array
{
    $file = fopen(CHAT_FILE_NAME, 'r');
    $mes = [
        'time' => '',
        'user' => '',
        'message' => ''
    ];

    while ($row = fgetcsv($file)) {
        $row = fgetcsv($file);

        $mes['time'] = $row[0];
        $mes['user'] = $row[1];
        $mes['message'] = $row[2];
        //var_dump($row);
    }
    fclose($file);
    var_dump($mes);
    echo count($mes);

    return $mes;
}

if ($_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest') {
    $user = $_POST['UserName'] ?? '';
    $msg = $_POST['Message'] ?? '';
    $param_microtime = $_POST['param_microtime'] ?? '';
    write_to_file($user, $msg);
    read_messages($param_microtime);
}