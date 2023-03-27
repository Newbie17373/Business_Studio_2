<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/registration.css">
    <title>Вход</title>
</head>
<body>
    <div class="wrapper">
    <?php
        require './vendor/components/connect.php';

        if(isset($_POST['login']) && isset($_POST['password'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];

            $query1 = "SELECT * FROM users WHERE login = ? and password = ?";
            $stmt = $pdo->prepare($query1);
            $stmt->execute([$login, $password]);
            $count = $stmt->rowCount();

            if($count === 1) {
                $_SESSION['login'] = $login;
                $stmt2 = $pdo->prepare($query1);
                $users = $stmt2->fetch();

                foreach ($users as $user) {
                    if ($user['login'] === $login) {
                        $_SESSION['name'] === $review['name'];
                        $_SESSION['surname'] === $review['surname'];
                    }
                }
            }
            else {
                $fmsg = "Был введен неверный логин или пароль";
            }
        }
        ?>
        <div class="popup__authorization">
            <div class="popup__authorization-inside">
                <a href="./index.php" class="popup__area"></a>
                <form action="" method="post" class="popup__authorization-form">
                        <a href="./index.php" class="popup__authorization-close popup-hover"></a>
                        <!-- <button class="popup__authorization-login-google popup-hover" type="button" use="hollow" data-no-auto-focus="true"><img src="./assets/img/icons/google.svg" alt=""><span>Продолжить через Google</span></button>
                        <span class="popup__authorization-text">или</span> -->
                        <input type="text" class="popup__authorization-logIN" name="login" placeholder="Login" minlength="9" maxlength="40">
                        <input class="popup__authorization-password" name="password" type="password" placeholder="Password" minlength="8" maxlength="16">
                        <button class="popup__authorization-login popup-hover" type="sumbit">Войти</button>
                        <div class="popup__authorization-sign-in-and-up">
                            <span>Нет учетной записи? <a href="./registration.php" class="popup__authorization-button-registration"><span>Создайте ее.</span></a></span>
                            <?php if(isset($_SESSION['login'])) {header('Location: ./index.php'); }?>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>