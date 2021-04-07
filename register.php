<?php

    @session_start();

    if (isset($_SESSION['user']['type']) && $_SESSION['user']['type'] == 'admin') 
    {
        header('Location: /admin.php');
    }

    if (isset($_SESSION['user']['type']) && $_SESSION['user']['type'] == 'user') 
    {
        header('Location: /profile.php');
    }

?>

<!DOCTYPE html>
<html lang="ru">

<head>

    <?php 
    
        include('head.php'); 
    
    ?>


    <link rel="stylesheet" href="css/auth.css">
    
</head>

<body>

    <?php 
    
        include('navigation.php'); 
    
    ?>

    <form class="air-reg">

        <div class="row">Имя

            <input type="text" name="name">

        </div>

        <div class="row">Логин

            <input type="text" name="login">

        </div>

        <div class="row">Почта

            <input type="email" name="email">

        </div>

        <div class="row">Пароль

            <input type="password" name="password">

        </div>

        <div class="row">Подтвердите пароль

            <input type="password" name="password_confirm">
            
        </div>

        <button type="submit" class="register-btn">Зарегистрироваться</button>

        <a class="jump-reg" href="/auth.php">Авторизоваться</a>

        <div class="msg none"></div>

    </form>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/auth.js"></script>
    <script src="js/menu.js"></script>

</body>
</html>