<?php

$mysqli = mysqli_connect("localhost","root","","WSR") or die("Ошибка: " . mysqli_error($con));

if (!empty($_POST['login']) && !empty($_POST['pass'])) 
{
    $sql = "SELECT * FROM user WHERE login= ?  LIMIT 1";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('s',  $_POST['login']);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    
    if($user!=null) {      
        header("Location: err_reg.php");
        die();     
    }
    else  { 
        $password = $_POST['pass'];
        $hash = password_hash($password, PASSWORD_DEFAULT); 
        $sql = "INSERT INTO user (id, name, login, password) VALUES (NULL, ?, ?, ?)";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('sss',  $_POST['name'], $_POST['login'], $hash);
        $stmt->execute();  
        setcookie("user",  $_POST['login'], time()+3600);       
        header("Location: suc_reg.php");  
        die();   
    }
}

?>
