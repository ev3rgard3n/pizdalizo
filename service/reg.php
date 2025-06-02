<?php
include __DIR__ . "/../database/db.php";

if (isset($_POST['btn-reg'])) {
    $fio      = trim($_POST["fio"]);
    $email    = trim($_POST["email"]);
    $login    = trim($_POST["login"]);
    $password = trim($_POST["password"]);
    $phone    = trim($_POST["phone"]);
    $rule     = trim($_POST["rule"]);

    if (findOneUniq($login)) {
        $_SESSION["exp"] = "Пользователь существует";
        header('location: reg.php');
    } else {
        regUser([
            "login" => $login, "password" => $password, "email" => $email, "phone" => $phone, "fio" => $fio,
        ]);

        $_SESSION['user'] = $login;
        $_SESSION["exp"] = null;
        header('location: index.php');
    }
}
