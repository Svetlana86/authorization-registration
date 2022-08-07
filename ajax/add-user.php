<?php

require_once "../config.php";

$password = $_POST['password'];
$hash = password_hash($password, PASSWORD_DEFAULT); 
$sql = "INSERT INTO user (id, name, login, password) VALUES (NULL, '', ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('ss',  $_POST['login'], $hash);
$stmt->execute();  

$sql="SELECT * FROM user WHERE login= ?  LIMIT 1";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('s',  $_POST['login']);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
echo json_encode($user);

die();

