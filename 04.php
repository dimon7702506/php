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
    <button type="submit" class="btn btn-primary" name="home" value="Submit" onclick="window.location.href='./index.html'">Home</button>

    <h3 class = "container">Задание 1, 2:</h3>

    <?php
        if (!$_POST['submit2']){?>
            <form method="post">
                <div class = "container">
                    <div class="form-group">
                        <label for="city">Введите город</label>
                        <input required type="text" class="form-control" name="city" placeholder="Введите город" value="<?=isset($_POST['city']) ? $_POST['city'] : ''?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit1" value="Submit">Submit for task 1</button>
                    <button type="submit" class="btn btn-primary" name="submit2" value="Submit">Submit for task 2</button>
                </div>
            </form>
    <?php
        }
        require_once "04_request_city.php";
    ?>

    <br>
    <h3 class = "container">Задание 3:</h3>
    <form method="post">
        <div class = "container">
            <div class="form-group">
                <label for="city">Введите имя</label>
                <input required type="text" class="form-control" name="name" placeholder="Введите имя" value="<?=isset($_POST['name']) ? $_POST['name'] : ''?>">
            </div>
            <button type="submit" class="btn btn-primary" name="submit3" value="Submit">Submit for task 3</button>
        </div>
    </form>
    <?php
        require_once "04_request_name.php";
    ?>

    <br>
    <h3 class = "container">Задание 4:</h3>
    <form method="post">
        <div class = "container">
            <div class="form-group">
                <label for="name">Введите имя</label>
                <input required type="text" class="form-control" name="name4" placeholder="Введите имя" value="<?=isset($_POST['name4']) ? $_POST['name4'] : ''?>">
            </div>
            <div>
                <label for="age">Введите возраст</label>
                <input required type="number" class="form-control" name="age" value="<?=isset($_POST['age']) ? $_POST['age'] : ''?>">
            </div>
            <div>
                <br>
                <label for="Massage">Введите сообщение</label>
                <textarea required id="massage" class="form-control" name="massage"><?=isset($_POST['massage']) ? $_POST['massage'] : ''?></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="send" value="Submit">Send massage</button>
        </div>
    </form>
    <?php
        require_once "04_request_massage.php";
    ?>


</body>
</html>
