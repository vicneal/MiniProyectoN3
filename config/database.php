<?php
try {
    $hostname = "localhost";
    $username = "root";
    $usrPassword = "16345abcde@A";
    $dbname = "login_db";

    $dsn = "mysql:host=$hostname; dbname=$dbname";

    $conexion = new PDO($dsn, $username, $usrPassword);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error" . $e->getMessage();
}