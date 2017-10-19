<?php

class UserName
{
    static public $count;
    public function __construct()
    {
        self::$count++;
    }

     public static function getCount()
    {
        return self::$count;
    }


    public static function chek_login($login)
    {
        $pattern = '/^[A-Za-z0-9_.]{1,}$/';
        if (preg_match($pattern, $login)) {
            echo "Login: " . $login . " - Ok" . "<br>";
        }else{
            echo "Login: " . $login . " - cтрока содержит недопустимые символы" . "<br>";
        }
        echo "<br>";
    }
}

$login_good = 'kpoxa';
$login_bad = 'кроха';

$user = new UserName();
$user1 = new UserName();
$user::chek_login($login_good);
$user1::chek_login($login_bad);
echo "Количество объектов: " . $user::getCount();