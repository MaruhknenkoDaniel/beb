<?php
session_start();

if ($_SESSION['user']) {

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form >
        <img src="<?=$_SESSION['user']['avatar'] ?>" width="200">
        <h2 style="margin: 10px 0"><?= $_SESSION['user']['full_name']?></h2>
        <a href="#"><?= $_SESSION['user']['email']?></a>
        <a href = "index.html" class="logout">На главную</a>
    </form>
</body>
</html>
