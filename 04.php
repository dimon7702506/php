<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

    <h3 class = "container">Задание 1:</h3>

    <form method="post">
        <div class = "container">
            <div class="form-group">
                <label for="city">Введите город</label>
                <input type="text" class="form-control" name="city" placeholder="Введите город" value="<?=isset($_POST['city']) ? $_POST['city'] : ''?>">
            </div>
            <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
        </div>
    </form>
    <?php
        if(isset($_POST['submit'])){
            if($_POST['city']){
                $city = $_POST['city'];
                echo "<h4 class = \"container\">Ваш город: ".$city."</h4>";
            }else{
                echo "<h4 class = \"container\">Не введен город!!!</h4>";
            }
        }
    ?>
    <br>

    <h3 class = "container">Задание 2:</h3>
</body>
</html>
