<?php
    if(isset($_POST['send'])){
        if ($_POST['name4'] && $_POST['age'] && $_POST['massage']) {
            echo "<br>";
            echo "<h4 class = \"container\" style='color: red;'>Привет, ".$_POST['name4']." ".$_POST['age'].", лет."."</h4>";
            $tegs = array("<","/>",">");
            $massage = str_replace($tegs,"", $_POST['massage']);
            echo "<h4 class = \"container\" style='color: red'>Твое сообщение: ".$massage."</h4>";
        }
    }
?>