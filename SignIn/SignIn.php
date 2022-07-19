<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/SignIn.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;500;600;800&display=swap" rel="stylesheet">
</head>

<body>
    <?php 
        if($_COOKIE['user'] == ''):
    ?>
    <header>
        <div class="InfoHead">
            <div >
                <a href='../index.php' class="LogoName">
                    Premium
                </a>
            </div>
            <div class="InfoClinic">
                <div class="InfoItemHead ItemHeadPhone">
                    <img src="../css/img/icons/phone.svg" class="PhoneHead">
                    <div class="ItemHeadText">
                        <div class="ItemHeadFunct">
                            Телефон
                        </div>
                        <div class="ItemHeadData">
                            (237) 681-812-255
                        </div>
                    </div>
                </div>
                <div class="InfoItemHead ItemHeadTime">
                    <img src="../css/img/icons/clock.svg" class="WorkTime">
                    <div class="ItemHeadText">
                        <div class="ItemHeadFunct">
                            Время работы
                        </div>
                        <div class="ItemHeadData">
                            09:00 - 20:00 Everyday
                        </div>
                    </div>
                </div>
                <div class="InfoItemHead ItemHeadLocation">
                    <img src="../css/img/icons/location.svg" class="Location">
                    <div class="ItemHeadText">
                        <div class="ItemHeadFunct">
                            Адрес
                        </div>
                        <div class="ItemHeadData">
                            Конаева 21
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="FormBlock">
            <div class="FormName">
                Войти
            </div>
            <form action="../validation-form/auth.php" method="post" class="Form" name="form" id="Form">
                <div class="FormItem">
                    <label for="Email">
                        Элект. почта
                    </label>
                    <input type="email" id="Email" class="email" name="email">
                </div>

                <div class="FormItem">
                    <label for="Pass">
                        Пароль
                    </label>
                    <input id="Pass"type='password' class="name" name="pass">
                </div>
                <button type="submit" class="BtnSignUp">
                    Войти
                </button>
            </form>
            <a href="../SignUp/SignUp.php" class="LinkSignIn">У вас нет аккаунт?</a>
        </div>
        
    </main>
    <?php 
        else:
    ?>
    <p>Привет дорогой <?=$_COOKIE['user']?>! <a href='../exit.php'>Log out</a></p>

    <?php 
        endif;
    ?>
</body>

</html>