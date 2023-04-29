<?php
session_start();
if (array_key_exists('error',$_SESSION))
    echo $_SESSION['error'];
unset($_SESSION['error']);
if (array_key_exists('user', $_SESSION)) {
?>
<div class="regist">
<h1>Смена пароля</h1>
<form action="core/change_password.php" method="POST">
    <lable for = 'login'>login</lable>
    <input type='text' id=login name='login' placeholder="введите логин">
    <br>

    <label for="old_password">old password</label>
    <input id='old_password' name = 'old_password' type ="password"  placeholder="введите старый пароль">
    <br>
    <label for="password">password</label>
    <input id='password' name = 'password' type ="password"  placeholder="введите пароль">
    <br>
    <label for="password2">re passwd</label>
    <input id='password2' name = 'password2' type = "password" placeholder="повторите пароль">
    <br />
    <button type="submit">Сменить пароль</button>
</form>

<a href="/homepage.php">Домой</a>
</div>
<?php }
else{
    echo "<div class='regisr'> <h1>Вы не загегистрированы,</h1>";
?>
<br>
<a href = "/registration.php">зарегистрируйтесь</a> или <a href = "/login.php">авторизуйтесь</a></div>
<?php }?>
