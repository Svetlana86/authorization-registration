<?php

if (isset($_COOKIE['user'])) {

    $cookieUser = $_COOKIE['user'];
    echo "<h1> Вы зарегистрированы, ".$cookieUser."! </h1>".'Сейчас вы будете переадресованы на главную страницу сайта. Если это не произошло, перейдите на неё по <a href="/index.php">прямой&nbsp;ссылке</a>.</p>';
    header('Refresh: 5; URL = /index.php');

}

else 
header("Location: index.php");

    ?>