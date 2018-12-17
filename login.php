<?php
    $conn = mysqli_connect('localhost', 'root', '', 'restyle');
    session_start();

    if(isset($_POST['log'])){
        $login = $_POST['login'];
        $pass = $_POST['pass'];

        $query = "SELECT * FROM users WHERE login='" . $login . "'";
        $user = mysqli_query($conn, $query)->fetch_assoc();

        if($user['password'] == $pass){
            $_SESSION['auth'] = $user;
            header('Location: main.php');
        }
        else {print('Неверный логин или пароль!');}
    }

?>

<!DOCTYPE>
<html>
<head>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    <link href="https://fonts.googleapis.com/css?family=Sirin+Stencil" rel="stylesheet">
    <style>
        html body{
            padding: 0px;
            margin: 0px;
            width: 100%;
            height: 100%;
        }
        .main{
            display: flex;
            justify-content: space-around;
        }
        .items{
            word-spacing: 4em;
        }
        .items a{
            color: black;
            text-decoration-line: none;
            font-size: 15px;
            position: relative;
            top: 7px;
        }
        .vhod a{
            color: black;
            text-decoration-line: none;
            font-size: 15px;
            position: relative;
            top: 7px;
        }
        .vhod{
            word-spacing: 3em;
        }
        .name a{
            color: black;
            text-decoration-line: none;
            font-size: 30px;
            font-family: 'Sirin Stencil', cursive;
        }
        .it{
            text-align: center;
            font-size: 12px;
            font-family: 'Sirin Stencil', cursive;
        }
        .image1{
            width: 30%;
        }
        .image2{
            width: 30%;
        }
        .image1 img{
            float: left;
        }
        .image2 img{
            float: right;
        }
        .images{
            display: inline-flex;
            height: 1200px;
        }
        .text{
            width: 40%;
            text-align: center;
            position: relative;
            top: 100px;
        }
        .text a{
            color: black;
            text-decoration-line: none;
            font-size: 12px;
            font-family: 'Sirin Stencil', cursive;
            position: relative;
        }
        .text .p1 p{
            font-size: 60px;
        }
        .a{
            word-spacing: 2em;
        }
        .p2{
            position: relative;
            top: 150px;
        }
        .p2 p{
            font-size: 20px;
        }
        .p2 .a2{
            word-spacing: 2em;
        }
        .PP{
            text-align: center;
            display: flex;
            flex-direction: column;
            position: relative;
            top: 70px;
        }
        .PP a{
            font-size: 40px;
            padding: 20px;
            font-family: bold;
        }
        footer{
            background-color: rgb(252,250,252);
            position: relative;
            height: 150px;
            bottom: 0px;
            clear: both;
            text-align: center;
            word-spacing: 2em;
        }
        footer i{
            position: relative;
            top: 90px;
            word-spacing: 4em;
        }
        footer a{
            color: black;
        }
        .end{
            position: relative;
            top: 130px;
        }
    </style>
    <script>
        var i=0;
        var images=[];
        var time=4000;
        images[0]='images/image1.jpg';
        images[1]='images/image3.jpg';
        function changeImg(){
            document.image1.src=images[i];
            document.image2.src=images[i];
            if(i<images.length-1){
                i++;
            }
            else{
                i=0;
            }
            setTimeout("changeImg()",time);
        }
        window.onload=changeImg;
    </script>
</head>
<body>
<div class="main">
    <div class="name">
        <a href="main.php">RESTYLE</a>
    </div>
    <div class="items">
        <a href=""><strong>Распродажа</strong></a>
        <a href="main.php"><strong>Женская</strong></a>
        <a href="men.php"><strong>Мужская</strong></a>
        <a href="girl.php"><strong>Девочки</strong></a>
        <a href="boy.php"><strong>Мальчики</strong></a>
    </div>
    <div class="vhod">
        <a href="signin.html">Вход</a>
        <a href=""><i class="fas fa-shopping-cart"></i></a>
    </div>
</div>
<hr>
<div class="it">Бесплатная доставка от KZT 11 500</div>
<hr>

<form action="login.php" method="post">
    <input type="text" placeholder="Логин..." name="login" required>
    <input type="password" placeholder="Пароль..." name="pass" required>
    <button type="submit" name="log">Войти</button>
</form>
<p>Нет аккаунта? <a href="sign-up.php">Зарегистрироваться</a></p>

<footer class="footer">
    <a href=""><i class="fab fa-instagram "></i></a>
    <a href=""><i class='fab fa-facebook'></i></a>
    <a href=""><i class='fab fa-twitter'></i></a>
    <a href=""><i class='fab fa-vk'></i></a>
    <div class="end">&copy<?=date('Y')?> RESTYLE</div>
</footer>
</body>
</html>






