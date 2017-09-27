<?php

function validate_email($email)
{
    if (preg_match('/[.]{2,}/', $email)) {
        return false;
    }

    $pattern = '/^[a-z0-9]{1,}[._-a-z0-9]{1,}@[a-z0-9.]{2,}\.[a-z]{2,10}$/';
    return (bool) preg_match($pattern, $email);
}
//$is_valid = validate_email('abc...z@er...com.ua');
$is_valid = validate_email('abc.z@er.com.ua');
var_dump($is_valid);

