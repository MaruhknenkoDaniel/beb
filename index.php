
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body{
            background-color: #067d7d;
        }
        p{
            text-align: center;
            padding: 0 20px;
            color: #fff;

            font-family: sans-serif;
            text-transform: uppercase;
            transition: .5s;
        }
        img{
            width:200px;
            height:200px;
            align-items: left;
            

        }
    </style>
        <link rel="shortcut icon" href="free-icon-rubik-522103.png">
</head>
<body>
    <img src="free-icon-rubik-522103.png" alt="">
    <form action="vendor/signin.php" method = "post">
    <label><p>Логин</p></label>
    <input type="text" name ="login" placeholder = "Введите свой логин ">
    <label><p>Пароль</p></label>
    <input type="password" name="password" placeholder="Введите пароль">
    <button type ="submit"> Войти</button>
    <p>
        У вас нету аккаунта? - <a href="register.php">Зарегистрируйтесь!</a>
    </p>

    <?php
        if ($_SESSION['message']) {
            echo '<p class="msg"> ' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
    ?>
    </form>
</body>
</html>