<?php
include __DIR__ . "/../database/db.php";

if (isset($_POST['btn-log'])) {
    $login    = trim($_POST["login"]);
    $password = trim($_POST["password"]);

    if (!findOneUniq($login)) {
        $_SESSION["exp"] = "Не верный логин или пароль";
        header('location: login.php');
    } else {
        $_SESSION['user'] = $login;
        $_SESSION["exp"] = null;
        header('location: index.php');
    }
}