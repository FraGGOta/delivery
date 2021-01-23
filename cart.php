<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include('head.php'); ?>
    <link rel="stylesheet" href="css/cart.css">
</head>

<body>

    <?php include('navigation.php'); ?>

    <div class="cart-menu"></div>

    <form action="" class="air">
        <div class="row">Имя
            <input type="name" name="name" id="ename" required>
        </div>
        <div class="row">Телефон
            <div class="row-icon">
                <i class="data telephone"></i>
                <input pattern="^\+7\d{3}\d{7}$" value="+7" maxlength="12" id="etelephone" required>
            </div>
        </div>
        <div class="row">Почта
            <div class="row-icon">
                <i class="data email"></i>
                <input type="email" name="email" id="eemail" required>
            </div>
        </div>

        <div class="row">Ваш адрес
            <textarea rows="3" id="eaddress" required></textarea>
        </div>
        <i class="data send"></i>
        <button type="submit" class="send-email">Заказать</button>
    </form>

    <div class="total"></div>
    <div class="main-cart"></div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/cart.js"></script>

</body>

</html>