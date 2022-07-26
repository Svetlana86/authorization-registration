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

    $password = $_POST['pass'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    if($user!=null) {      
      if (password_verify($password, $hash))
      {
        header("Location: suc.php");
        die();
      }
      else  {
        header("Location: err.php");
        die();
      }
    }
    else  {
      $sql = "INSERT INTO user (id, login, password) VALUES (NULL, ?, ?)";
      $stmt = $mysqli->prepare($sql);
      $stmt->bind_param('ss',  $_POST['login'], $hash);
      $stmt->execute();
      
      header("Location: reg.php");
      die();
      
    }
}
