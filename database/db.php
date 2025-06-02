<?php

session_start();
include __DIR__ . "/conn.php";

function findOneUniq($login)
{
    global $conn;
    $sql = "select login from users where login='$login'";

    $result = mysqli_query($conn, $sql);
    if ($result->num_rows >= 1) {
        return true;
    }
    return false;
}

function findOneLog($login, $pass)
{
    global $conn;
    $sql = "select login from users where login='$login' and password='$pass' ";

    $result = mysqli_query($conn, $sql);
    if ($result->num_rows >= 1) {
        return true;
    }
    return false;
}

function regUser($params = [])
{
    global $conn;

    $sql  = "INSERT INTO `users` (`login`, `password`, `email`, `phone`, `fio`) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$params['login'], $params['password'], $params['email'], $params['phone'], $params['fio']]);
}


function logout()
{
    $_SESSION['user'] = null;
}


