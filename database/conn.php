<?php

try {
    $conn = mysqli_connect("localhost", "root", "mysql", "pizdolizo");
    if (! $conn) {
        throw new Exception("Error connection: " . mysqli_connect_error());

    }
} catch (Exception $exception) {
    die($exception->getMessage());
}
