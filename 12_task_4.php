<?php

$temp_cookie = '';
if (!isset($_GET['step'])) {
    setcookie ('temp_cookie','ok',time()+14*24*60*60);
    header ('Location: '.$_SERVER['PHP_SELF'].'?step=1');
}
else {
    //var_dump($_COOKIE);
    if(array_key_exists('temp_cookie', $_COOKIE)) {
        if ($_COOKIE['temp_cookie'] == 'ok') {
            echo "Cookie is enable";
        }
    } else {
        echo "Cookie is disable";
    }
}