<?php
session_start();
require_once('connection.php');
$db=connect();
if (!array_key_exists('old_password', $_POST)){
            header('Location: /login.php');
}
try{
    $login = $_POST['login'];
    $pass = $_POST['old_password'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    if (!($password === $password2)) {
        echo "Passwords aren't same.";
    } elseif (strlen($password) < 6) {
        echo "Password is too short.";
    } elseif (!preg_match("#[A-Z]+#", $password)) {
        echo "Password must contain at least one uppercase letter.";
    } elseif (!preg_match("#[a-z]+#", $password)) {
        echo "Password must contain at least one lowercase letter.";
    } elseif (!preg_match("#\W+#", $password)) {
        echo "Password must contain at least one special character.";
    } else {
        echo "Password is strong enough.";

        $db->query("UPDATE users SET password='$password' WHERE login='$login' AND password='$pass'");
        header('Location: /homepage.php');
    };
}
catch (Exception $e) {
            $_SESSION['error']=$e;
            header('Location: /login.php');
}
