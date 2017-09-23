<?php

session_start();

require_once "./09_function.php";

if (!is_user_logged_in()) {
    //показать форму ввода логин-пароль
    $errors = [];
    if(isset($_POST['submit_login'])){
        $login = $_POST['login'] ?? '';
        $password = $_POST['password'] ?? '';
        if (strlen($login) > 16 || strlen($login) < 5) {
            $errors['login'] = 'Field login mast be 5 to 16 symbols';
        }
        if (strlen($password) > 12 || strlen($login) < 6) {
            $errors['password'] = 'Field password mast be 6 to 12 symbols';
        }
        if (empty($errors)){
            log_in();
            header('location: 09_index.php');
        }
    }
    include "./09_login.html";
}else{
    //показать личный кабинет
    if (!empty($_POST['log_out'])){
        log_out();
        header('location: 09_index.php');
    }
    include "./09_profile.html";
}