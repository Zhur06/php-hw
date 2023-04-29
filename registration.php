<?php
session_start();
if (array_key_exists('error',$_SESSION)){
echo 'вы не правильно ввели данные';
unset($_SESSION['error']);
}
?>
<br>
<div class="regist">
<h1>Регистрация</h1>
<form action="core/validation.php" method="POST">

    <label for="login">Логин</label>
    <input id='login' name = 'login' type ="text">
    <br />
    <label for="first_name">Имя</label>
    <input id="first_name" name="first_name" type="text" />
    <label for="last_name">Фамилия</label>
    <input id="last_name" name="last_name" type="text" />
    <br />
	<label for="email">email</label>
    <input id='email' name = "email" type ="email">
    <br>
    <label for="password">password</label>
    <input id='password' name = 'password' type ="password"  placeholder="введите пароль">
    <br>
    <label for="password2">re passwd</label>
    <input id='password2' name = 'password2' type = "password" placeholder="повторите пароль">
    <hr />
    <h3>Дополнительная информация</h3>
    <label for="age">Возраст</label>
    <input id="age" name="age" type="number" />
    <br />
    <label for="class">Класс (номер)</label>
    <input id="class" name="class" type="number" />
    <label for="class_letter">Буква</label>
    <input id="class_letter" name="class_letter" type="text" />
    <br />
    <label for="interests">Интересы</label>
    <textarea id="interests" name="interests"></textarea>
    <br />

    <button type="submit">Зарегистрироваться</button>
</form>

<a href = "/login.php">авторизуйтесь</a>
</div>
