<?php
session_start();
require_once('connection.php');
$db=connect();
if (!array_key_exists('old_password', $_POST)){
            header('Location: /login.php');
}
try{
    $login = $_POST['login'];
    $pass = md5($_POST['old_password']);
    if ($_POST['password']===$_POST['password2'] and strlen($_POST['password'])>6){
        $new_pass = md5($_POST['password']);

        $db->query("UPDATE users SET password='$new_pass' WHERE login='$login' AND password='$pass'");
        header('Location: /homepage.php');
    }
    else {
        $_SESSION['error'] = 'вы не правильно ввели пароль';
        header('Location: /change_password.php ');
            }
}
catch (Exception $e) {
            $_SESSION['error']=$e;
            header('Location: /login.php');
}
