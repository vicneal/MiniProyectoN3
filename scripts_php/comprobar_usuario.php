<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    session_start();
    extract($_POST);

    require_once "../config/database.php";

    $stringQuery = "select email, pass , nombre, id from usuarios where email= :mail";
    $query  = $conexion->prepare($stringQuery);

    $query->bindParam(':mail', $email);

    $query->execute();

    $data = $query->fetchAll(PDO::FETCH_ASSOC);

    if (count($data) > 0) {
        if (password_verify($contraseña, $data[0]["pass"])) {
            // echo "USUARIO VALIDO";
            // echo "CONTRASEÑA VALIDA";

            $_SESSION["username"] = $data[0]["nombre"];
            $_SESSION["id"] = $data[0]["id"];
            header("Location: ../views/personaIInfo.php");
        } else {
            // echo "CONTRASEÑA INCORRECTA";
            header("Location: ../index.php");
        }
    } else {
        // echo "NO EXISTE EL USUARIO";
        header("Location: ../index.php");
    }
}