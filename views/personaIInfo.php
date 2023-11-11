<?php
session_start();
$nom_usuario = $_SESSION["username"];
$id = $_SESSION["id"];


if (!isset($nom_usuario)) {
    header("Location: ../index.php");
}
require_once "../config/database.php";

$res = $conexion->query("select * from usuarios where id='$id'");
$data = $res->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@200;300;400;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/personalInfo.css" />
    <title>Mini Proyecto Nivel 3</title>
</head>

<body>
    <header>
        <nav class="navbar bg-body-tertiary ">
            <div class="container-fluid d-flex align-content-center">
                <a class="navbar-brand" href="#">
                    <img src="../assets/devchallenges.svg" alt="Logo" width="150"
                        class="d-inline-block align-text-center">
                </a>
                <div class="dropdown">
                    <?php
                    foreach ($data as $usuario) {
                        if ($usuario["photo"] !== null) {
                            $img_blog = base64_encode($usuario["photo"]); ?>
                    <img src='data:image/*;base64,<?= $img_blog ?>' alt="avatar usuario" class="avata-img-header">
                    <?php } else { ?>
                    <img src="/assets/User-avatar.svg.png" alt="avatar usuario" class="avata-img-header">
                    <?php }
                    }
                    ?>

                    <a class="btn  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">

                        <?php if ($nom_usuario !== "Desconocido") { ?>
                        <?php foreach ($data as $usuario) { ?>
                        <span class="user-header"><?= $usuario["nombre"] ?></span>
                        <?php } ?>
                        <?php } else { ?>
                        <span class="user-header"><?= $nom_usuario ?></span>
                        <?php } ?>

                    </a>

                    <ul class="dropdown-menu mt-4" style="width: 11rem;">
                        <li class="py-2"><a class="dropdown-item d-flex gap-3 item-profile" href="#"><i
                                    class="bi bi-person-circle"></i> <span>My
                                    Profile</span></a></li>
                        <li class="py-2"><a class="dropdown-item d-flex gap-3 item-profile" href="#"> <i
                                    class="bi bi-people-fill"></i>
                                <span>Group
                                    Chat</span></a></li>
                        <li class="line"></li>
                        <li class="py-3 logout">
                            <form action="../scripts_php/cerrar_session.php" method="post">
                                <button type="submit" class=" dropdown-item d-flex gap-3 ">
                                    <i class="bi bi-box-arrow-right"></i>
                                    Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="d-flex flex-column align-items-center">

        <div class="text-center">
            <h2>Personal info</h2>
            <h4>Basic info, like your name and photo</h4>
        </div>
        <div class="card my-4" style="width: 50rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item py-4">
                    <div class="container-li d-flex align-items-center justify-content-between">
                        <div>
                            <h3>Profile</h3>
                            <p class="profile-info">Some info may be visible to other people</p>
                        </div>
                        <div>

                            <a class="btn btn-outline-secondary px-4 btn-edit"
                                href="./changeInfo.php?id=<?= $id ?>">Edit</a>

                        </div>
                    </div>
                </li>
                <?php
                foreach ($data as $usuario) { ?>


                <li class="list-group-item">
                    <div class="container-li d-flex align-items-center justify-content-start my-3">
                        <div class="col-4">
                            <p class="profile-cabecera-datos">PHOTO</p>
                        </div>
                        <div class="col-8">
                            <?php
                                if ($usuario["photo"] !== null) {
                                    $img_blog = base64_encode($usuario["photo"]); ?>
                            <img src='data:image/*;base64,<?= $img_blog ?>' alt="avatar usuario" class="avatar-img">
                            <?php } else { ?>
                            <img src="/assets/User-avatar.svg.png" alt="avatar usuario" class="avatar-img">
                            <?php }

                                ?>

                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="container-li d-flex align-items-center justify-content-start my-3">
                        <div class="col-4">
                            <p class="profile-cabecera-datos">NAME</p>
                        </div>
                        <div class="col-8">
                            <p class="profile-datos"><?= $usuario["nombre"] ?></p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="container-li d-flex align-items-center justify-content-start my-3">
                        <div class="col-4">
                            <p class="profile-cabecera-datos">BIO</p>
                        </div>
                        <div class="col-8">
                            <p class="profile-datos"><?= $usuario["bio"] ?></p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="container-li d-flex align-items-center justify-content-start my-3">
                        <div class="col-4">
                            <p class="profile-cabecera-datos">PHONE</p>
                        </div>
                        <div class="col-8">
                            <p class="profile-datos"><?= $usuario["phone"] ?></p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="container-li d-flex align-items-center justify-content-start my-3">
                        <div class="col-4">
                            <p class="profile-cabecera-datos">EMAIL</p>
                        </div>
                        <div class="col-8">
                            <p class="profile-datos"><?= $usuario["email"] ?></p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="container-li d-flex align-items-center justify-content-start my-3">
                        <div class="col-4">
                            <p class="profile-cabecera-datos">PASSWORD</p>
                        </div>
                        <div class="col-8">
                            <p class="profile-datos">************</p>
                        </div>
                    </div>
                </li>
                <?php }
                ?>

            </ul>
        </div>
    </main>
</body>

</html>