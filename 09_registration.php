<?php

require_once "./09_function.php";

$reg_errors = [];
if (isset($_POST['registration'])) {
    $reg_login = $_POST['reg_login'] ?? '';
    $reg_password1 = $_POST['reg_password1'] ?? '';
    $reg_password2 = $_POST['reg_password2'] ?? '';
    if (strlen($reg_login) > 16 || strlen($reg_login) < 5) {
        $reg_errors['reg_login'] = 'Field login mast be 5 to 16 symbols!';
    }
    if (strlen($reg_password1) > 12 || strlen($reg_password1) < 6) {
        $reg_errors['reg_password1'] = 'Field password mast be 6 to 12 symbols!';
    }
    if ($reg_password1 <> $reg_password2) {
        $reg_errors['reg_password2'] = 'Two different passwords!';
    }
    if (reCAPTCHA2() ) {
        if (empty($reg_errors)) {
            write_to_file($reg_login, $reg_password1);
            header('location: 09_good_registration.html');
        }
    }
}
include "./09_registration.html";