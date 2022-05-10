<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="free-icon-rubik-522103.png">
    <style>
        body{
            background-color: #067d7d;
            margin:0;
            
        }
        img{
            width:200px;
            height:200px;
            align-items: left;
            

        }
        p{
            text-align: center;
            padding: 0 20px;
            color: #fff;

            font-family: sans-serif;
            text-transform: uppercase;
            transition: .5s;
        }
    </style>
</head>
<body>
   
    <form action="vendor\signup.php" method="post" enctype="multipart/form-data">
    <label><p>ФИО</p></label>
    <input type="text" name="full_name" placeholder="Введите свое полное имя ">
    <label><p>Логин</p></label>
    <input type="text" name="login" placeholder="Введите свой логин ">
    <label><p>Почта</p></label>
    <input type="email" name="email" placeholder="Введите свою почту ">
    <label><p>Изоброжения профиля</p></label>
    <input type="file" name="avatar">
    <label><p>Пароль</p></label>
    <input type="password" name="password" placeholder="Введите пароль ">
    <label><p>Подтвердите пароль<p></label>
    <input type="password" name="password_confirm" placeholder="Подтвердите пароль ">
    <button type="submit">Войти</button>
    <p>
        У вас есть аккаунт? - <a href="index.php">Войти!</a>
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