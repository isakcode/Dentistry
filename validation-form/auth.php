<?php 
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_STRING); 
        $pass = filter_var(trim($_POST["pass"]), FILTER_SANITIZE_STRING);
        $pass = md5($pass."anjfifna02932"); 
        $mysql = new mysqli('localhost','root','',"member'sdb"); 

        $result = $mysql->query("SELECT * FROM `memberstable` WHERE `Email` = '$email' AND `Password` = '$pass'");
        $user = $result->fetch_assoc();
        if(count($user) == 0){
            echo "Not found";
            exit();
        }
        setcookie('user', $user['Name'], time() + 3600, "/");
        $mysql->close();
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel='stylesheet' type='text/css' href='auth.css'/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;500;600;800&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href='#' class='LogoName'>
            Premium
        </a>
    </header>
    <main>
        <p class='WelcomeText'>
            Добро пожаловать в личный кабинет!
        </p>
        <div class="ProfileBlock">
            <div class="ProfileImg ProfileItem">    
                <img src='profile-icon.png'>
            </div> 
            <div class="ProfileName ProfileItem">
                Имя: <?=$_COOKIE['user']?>
            </div>
            <div class="ProfileEmail ProfileItem">
                Эл. почта: <?=$user['Email']?>
            </div>
            <div class="ProfileTel ProfileItem">
                Телефон: <?=$user['Tel']?>
            </div>
            <div class="ProfileId ProfileItem">
                Номер: <?=$user['ID']?>
            </div>
            <div class="ProfilePass ProfileItem">
                Пароль: <?=$user['Password']?>
            </div>
        </div>
        
    </main>
</body>
</html>