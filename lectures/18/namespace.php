<?php

namespace A{
    $a = 10;
    function strlen( string $s):bool
    {
        return true;
    }
    var_dump(strlen('123'));
    const C = 'C';

    class User
    {
        public $name = 'user 1';
    }
}

namespace B {

    use A\User as User1; //new User1. import class + alias
    use A\User;         //new User. import class
    use A as A1;        //import namespace + alias

    $u1 = new User1;
    var_dump($u1);

    $u = new User;
    var_dump($u);

    $user = new \A\User();
    var_dump($user);

    $ua1 = new A1\User();
    var_dump($ua1);
}