<?php
session_start();
require_once('connection.php');
$db=connect();
    if (array_key_exists('password',$_POST)){
        $login = $_POST['login'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $age = $_POST['age'];
        $class = $_POST['class'];
        $class_letter = $_POST['class_letter'];
        $interests = $_POST['interests'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        if ($_POST['password']===$_POST['password2'] and strlen($_POST['password'])>6){
            echo 'password good<br>';
            $user = $db->query("SELECT * FROM users WHERE login='$login'")->fetchArray();
            if ($user){
                $_SESSION['error'] = "Такой пользовтатель уже существует";
                header('Location: /registration.php');
            }
            $insert = $db->query("INSERT INTO users(login, email, password, first_name, last_name, age, class, class_letter, interests) VALUES('$login','$email','$password','$first_name','$last_name','$age','$class','$class_letter','$interests')");
            echo 'email good<br>';
            $user = $db->query("SELECT * FROM users WHERE login='$login' AND password='$password'")->fetchArray();
            if ($user!= NULL){
                $_SESSION['user']=$user;
                header('Location: /homepage.php');
                }

            }
        else {
            $_SESSION['error'] = 'вы не правильно ввели пароль';
            header('Location: /registration.php ');
                }
        }
    else{
        unset($_SESSION['error']);
        header('Location: /registration.php ');
    }

?>
