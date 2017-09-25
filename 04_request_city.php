<?php
    if(isset($_POST['submit1']) || isset($_POST['submit2'])){
        $city = $_POST['city'];
        echo "<br>";
        echo "<h4 class = \"container\">Ваш город: ".$city."</h4>";
    }
?>