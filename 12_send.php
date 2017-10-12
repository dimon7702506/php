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

function read_messages():array
{
    $file = fopen(CHAT_FILE_NAME, 'r');
    $mes = [];
    $row = [];
    while ($row = fgetcsv($file)) {
        array_push($mes, $row);
    }
    fclose($file);

    $mes = array_reverse($mes);
    $mes = array_slice($mes, 0, 50);

    return $mes;
}

if ($_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest') {
    $param_microtime = $_POST['param_microtime'] ?? '';
    if (isset($_POST['UserName']) && isset($_POST['Message']) && ($_POST['Message'] <> '')) {
        $user = $_POST['UserName'] ?? '';
        $msg = $_POST['Message'] ?? '';

        write_to_file($user, $msg);
    }
    $arrays = read_messages($param_microtime);

    $response = [
        'success' => true,
        'param_time' => '',
        'messages' => [],
    ];

    $messages = [];
    $temp_param_microtime = 0;

    foreach ($arrays as $array) {
        if ($temp_param_microtime == 0) {
            $temp_param_microtime = $array[0];
        }
        $mes = [
            'user' => $array[1],
            'message' => $array[2],
            'time' => date('d-m-y H:i:s', (float)$array[0])
            ];
        array_push($messages, $mes);
    }
    $response['param_time'] = $temp_param_microtime;
    $response['messages'] = $messages;

    header('Content-Type: application/json');
    echo json_encode($response);
    //print_r($messages[5]['user']);
}