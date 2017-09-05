<?php
    if(isset($_POST['findCity'])){
        $citys = array("Киев", "Харьков", "Одесса", "Днепр", "Донецк", "Запорожье", "Львов", "Кривой Рог", "Николаев",
            "Мариуполь", "Луганск", "Винница", "Полтава");
        $result = false;

        foreach ($citys as $cit){
            if (strpos(mb_strtolower($cit), mb_strtolower($_POST['word'])) !== false ) {
                echo "<br>";
                echo "<h4 class = \"container\">Ваш город: ".$cit."</h4>";
                $result = true;
            }
        }
        if ($result == false) {
            echo "<br>";
            echo "<h4 class = \"container\">Ничего не найдено!</h4>";
        }
    }
?>