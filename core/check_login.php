<?php
session_start();
require_once('connection.php');
$db=connect();
if (!array_key_exists('password', $_POST)){
            header('Location: /login.php');
}
try{
    $login = $_POST['login'];
    $pass = md5($_POST['password']);

    $user = $db->query("SELECT * FROM users WHERE login='$login' AND password='$pass'")->fetchArray();
    if ($user){
    $usr = $user;
    $_SESSION['user']=$usr;
    header('Location: /homepage.php');
    }
    else{
            $_SESSION['error']='такого пользователя не существует или не верный пароль';
            header('Location: /login.php');
    }
}
catch (Exception $e) {
            $_SESSION['error']=$e;
            header('Location: /login.php');
}
