<h1>Это домашняя страница</h1>
<?php
session_start();
if (array_key_exists('error', $_SESSION))
    echo $_SESSION['error'];
?>
<?php
if (array_key_exists('user', $_SESSION)) {
?>
<h2>Добро пожаловать, <?php echo $_SESSION["user"]["login"] ?>!</h2>
<ul>
    <li><a href="/profile.php">Профиль</a></li>
    <li><a href="/change_password.php">Сменить пароль</a></li>
    <li><a href="/logout.php">Выйти</a></li>
</ul>
<?php
    }
else{
    echo "<div class='regisr'> <h1>Вы не загегистрированы,</h1>";
?>
<a href = "/registration.php">зарегистрируйтесь</a> или <a href = "/login.php">авторизуйтесь</a></div>
<?php }?>
