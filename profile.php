<h1>Профиль</h1>
<?php
session_start();
if (array_key_exists('error', $_SESSION))
    echo $_SESSION['error'];
?>
<h2>
    <?php echo $_SESSION["user"]["first_name"]; ?>
    <?php echo $_SESSION["user"]["last_name"]; ?>
    (<?php echo $_SESSION["user"]["login"]; ?>)
</h2>
<ul>
    <li>Email: <?php echo $_SESSION["user"]["email"] ?></li>
    <li>Age: <?php echo $_SESSION["user"]["age"] ?></li>
    <li>Class: <?php echo $_SESSION["user"]["class"]; echo $_SESSION["user"]["class_letter"] ?></li>
    <li>Interests: <?php echo $_SESSION["user"]["interests"] ?></li>
</ul>
<a href="/homepage.php">Домой</a>
