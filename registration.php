<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/registration.css">
    <title>Регистрация</title>
</head>
<body>
    <div class="wrapper">
        <?php
        require './vendor/components/connect.php';

        if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['email'])) {
            $login = $_POST['login'];
            $email = $_POST['email'];
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $password = $_POST['password'];

            $query1 = "SELECT * FROM users WHERE login = ?";
            $stmt = $pdo->prepare($query1);
            $stmt->execute([$login]);
            $count = $stmt->rowCount();

            if($count === 1) {
                $fmsg = "Такой пользователь уже существует";
            }
            else {
                $query2 = "INSERT INTO users (login, email, name, surname, password) VALUES (?, ?, ?, ?, ?)";
                $stmt = $pdo->prepare($query2);
                $stmt->execute([$login, $email, $name, $surname, $password]);
                $smsg = "Регистрация прошла успешно";
            }
        }
        ?>
        <div class="popup__registration">
            <div class="popup__authorization-inside">
                <a href="./index.php" class="popup__area"></a>
                <form action="" method="post" class="popup__authorization-form">
                        <a href="./index.php" class="popup__authorization-close popup-hover"></a>
                        <!-- <button class="popup__authorization-login-google popup-hover" type="button" use="hollow" data-no-auto-focus="true"><img src="./assets/img/icons/google.svg" alt=""><span>Продолжить через Google</span></button>
                        <span class="popup__authorization-text">или</span> -->
                        <?php if(isset($smsg)){ ?><span class="popup__msg"><?php echo $smsg ?></span><?php }?>
                        <?php if(isset($fmsg)){ ?><span class="popup__msg"><?php echo $fmsg ?></span><?php }?>
                        <input type="text" class="popup__authorization-logIN" name="login" placeholder="Login" minlength="9" maxlength="40" require>
                        <input class="popup__authorization-email" type="email" name="email" placeholder="Email" minlength="9" maxlength="60" require>
                        <input type="text" class="popup__authorization-logIN" name="name" placeholder="Name" minlength="9" maxlength="40" require>
                        <input type="text" class="popup__authorization-logIN" name="surname" placeholder="Surname" minlength="9" maxlength="40" require>
                        <input class="popup__authorization-password" name="password" type="password" placeholder="Password" minlength="8" maxlength="16" require>
                        <input class="popup__authorization-password" type="password" placeholder="Password repeat" minlength="8" maxlength="16" require>
                        <button class="popup__authorization-login popup-hover" type="sumbit">Зарегистрироваться</button>
                        <div class="popup__authorization-sign-in-and-up">
                            <span>Уже есть аккаунт? <a href="./authentication.php" class="popup__registration-button-authorization"><span>Войти.</span></a></span>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>