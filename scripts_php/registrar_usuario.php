<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();
    extract($_POST);
    require_once "../config/database.php";

    $stringQuery = "select email from usuarios where email= :mail";
    $query  = $conexion->prepare($stringQuery);

    $query->bindParam(':mail', $email);

    $query->execute();

    $data = $query->fetchAll(PDO::FETCH_ASSOC);

    if (count($data) == 0) {


        $photo  = null;
        $nom = "Desconocido";
        $biografia  = "Desconocido";
        $telefono  = "999999999";

        $hashedPassword = password_hash($contraseña, PASSWORD_DEFAULT);


        $stringquery = "insert into usuarios (email,pass,photo,nombre,bio,phone) values(:email,:pass,:foto,:nombre, :bio,:phone)";
        $query = $conexion->prepare($stringquery);

        $query->bindParam(':email', $email);
        $query->bindParam(':pass', $hashedPassword);
        $query->bindParam(':foto', $photo);
        $query->bindParam(':nombre', $nom);
        $query->bindParam(':bio', $biografia);
        $query->bindParam(':phone', $telefono);
        $query->execute();

        $_SESSION["username"] = $email;


        $res = $conexion->query("select count(*) as cantidad_registros from usuarios");
        $data = $res->fetchAll(PDO::FETCH_ASSOC);
        $cantidad_usuarios = 0;
        foreach ($data as $cant_usu) {
            $cantidad_usuarios = $cant_usu["cantidad_registros"];
        }

        $_SESSION["id"] = $cantidad_usuarios;

        header("Location: ../views/personaIInfo.php");
    } else {
        echo "NO EXISTE EL USUARIO";
        header("Location: ../views/register.php");
    }
}