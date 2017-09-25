<?php

function is_user_logged_in()
{
    return !empty($_SESSION['user_id']);
}

function log_in($id /* = null*/, $login)
{
    //$id = $id ?? microtime(true);
    $_SESSION['user_id'] = (int) $id;
    $_SESSION['login'] = $login;
}

function get_user_name()
{
    if (!is_user_logged_in()) {
        return ' ';
    }
    return /*$_SESSION['user_id'] . " " .*/ $_SESSION['login'];
}

function log_out()
{
    $_SESSION['user_id'] = null;
}

function write_to_file($login, $password):void
{
    $list = [
        'user_id' => (int) microtime(true),
        'login' => $login,
        'password_hash' => password_hash($password, PASSWORD_DEFAULT)
    ];
    //var_dump($list);

    $file = fopen('09_accounts.csv', 'a+');
    fputcsv($file, $list);
    fclose($file);
}

function validation($login, $password):int
{
    $file = fopen('09_accounts.csv', 'r');
    while ($row = fgetcsv($file)) {
        if (($row[1] == $login) && (password_verify($password, $row[2]))) {
            $user_id = $row[0];
            break;
        }
    }
    fclose($file);

    return (int) $user_id;
}

function reCAPTCHA2()
{
    if (isset ( $_POST [ 'g-recaptcha-response' ]) &&! empty ( $_POST [ 'g-recaptcha-response' ])) {
        // секретный ключ вашего сайта
        $secret  =  '6LdwBDIUAAAAAPcrWBmzEVlOBI8NN1b5Q8q7BEtr' ;
        // получить данные проверки ответа
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response'] ?? '';
        $verifyResponse = file_get_contents($url);
        $responseData  =  json_decode ( $verifyResponse );
        if ( $responseData -> success ){
        // код
            return true;
        }else{
            return false;
        }
    }else {
        return false;
    }
}
