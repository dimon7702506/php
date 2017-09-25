<?php
    if(isset($_POST['submitLogin'])){
        $login = "petya";
        $pass = "123";
        $userLogin = rtrim($_POST['login']);
        $userPassword = rtrim($_POST['password']);
        if ($login == $userLogin && $pass == $userPassword) {
            echo "<br>";
            echo "<h4 class = \"container\">Доступ разрешен!</h4>";
        }else{
            echo "<br>";
            echo "<h4 class = \"container\">Доступ запрещен!</h4>";
        }
    }
?>