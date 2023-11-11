<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();
    extract($_POST);


    if (isset($_FILES["imagen"]) && is_uploaded_file($_FILES["imagen"]["tmp_name"]) && !empty($_FILES["imagen"]["tmp_name"])) {
        $tmp_name = ($_FILES["imagen"]["tmp_name"]);
        $foto_contenido = addslashes(file_get_contents($tmp_name));

        $id = $_SESSION["id"];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        require_once "../config/database.php";

        $stringQuery = "update usuarios set nombre= :nom ,photo= '$foto_contenido',bio= :bio ,phone= :cel , email= :mail, pass= :password  where id= :id";
        $query  = $conexion->prepare($stringQuery);

        $query->bindParam(':nom', $nombre);
        // $query->bindParam(':foto', $foto_contenido);
        $query->bindParam(':bio', $bio);
        $query->bindParam(':cel', $phone);
        $query->bindParam(':mail', $email);
        $query->bindParam(':password', $hashedPassword);
        $query->bindParam(':id', $id);


        $query->execute();

        $_SESSION["username"] = $nombre;
        header("Location: ../views/personaIInfo.php");
    } else {
        $id = $_SESSION["id"];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        require_once "../config/database.php";

        $stringQuery = "update usuarios set nombre= :nom ,bio= :bio ,phone= :cel , email= :mail, pass= :password  where id= :id";
        $query  = $conexion->prepare($stringQuery);

        $query->bindParam(':nom', $nombre);
        $query->bindParam(':bio', $bio);
        $query->bindParam(':cel', $phone);
        $query->bindParam(':mail', $email);
        $query->bindParam(':password', $hashedPassword);
        $query->bindParam(':id', $id);


        $query->execute();

        $_SESSION["username"] = $nombre;
        header("Location: ../views/personaIInfo.php");
    }
}