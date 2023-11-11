<?php
session_start();
$nom_usuario = $_SESSION["username"];
$id = $_GET["id"];

$_SESSION["id"] = $id;

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
    <link rel="stylesheet" href="../assets/css/changeInfo.css" />
    <title>Mini Proyecto Nivel 3</title>
</head>

<body>
    <header>
        <nav class="navbar bg-body-tertiary ">
            <div class="container-fluid d-flex align-content-center">
                <a class="navbar-brand" href="/views/personaIInfo.php">
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
                        <span class="user-header"><?= $nom_usuario ?></span>
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
    <main class="d-flex flex-column ">
        <div class="container-btn-back">
            <a href="./personaIInfo.php"><button type="button" class="btn btn-link">
                    <i class="bi bi-arrow-bar-left">

                    </i> Back</button></a>
        </div>

        <form action="/scripts_php/update_usuario.php" method="post" enctype="multipart/form-data">

            <div class="card my-4 mx-auto px-5 py-4" style="width: 50rem;">
                <div>
                    <h4>Change Info</h4>
                    <h5>Changes will be reflected to every services</h5>
                </div>
                <?php
                foreach ($data as $usuario) { ?>
                <div class="d-flex align-items-center">
                    <?php
                        if ($usuario["photo"] !== null) {
                            $img_blog = base64_encode($usuario["photo"]); ?>
                    <img id="preview" src='data:image/*;base64,<?= $img_blog ?>' alt="avatar usuario"
                        class="avatar-img">
                    <?php } else { ?>
                    <img id="preview" src="/assets/User-avatar.svg.png" alt="avatar usuario" class="avatar-img">
                    <?php }

                        ?>
                    <!-- <img id="preview" src="/assets/User-avatar.svg.png" alt="avatar usuario" class="avatar-img"> -->

                    <label for="imagen" class="custom-file-upload">
                        <i class="bi bi-camera-fill"></i>
                        <input type="file" accept="image/*" name="imagen" id="imagen">
                    </label>
                    <button type="button" class="btn btn-light btn-file" onclick="activatePreview()">CHANGE
                        PHOTO</button>

                </div>
                <div class="mb-3 col-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control " id="name" value="<?= $usuario['nombre'] ?>" name="nombre">
                </div>
                <div class="mb-3 col-6">
                    <label for="bio" class="form-label">Bio</label>
                    <textarea class="form-control" id="bio" rows="3" name="bio"> <?= $usuario['bio'] ?></textarea>
                </div>
                <div class="mb-3 col-6">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" value="<?= $usuario['phone'] ?>" name="phone">
                </div>
                <div class="mb-3 col-6">
                    <label for="email" class="form-label"> Email</label>
                    <input type="email" class="form-control" id="email" value="<?= $usuario['email'] ?>" name="email">
                </div>
                <div class="mb-3 col-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="************"
                        name="password">
                </div>
                <?php }
                ?>
                <div>
                    <div>
                        <button class="btn btn-primary px-4 btn-save mb-3">Save</button>
                    </div>
                </div>
        </form>
    </main>


    <script>
    function activatePreview() {
        var input = document.getElementById('imagen');
        var file = input.files[0];

        if (file) {
            // Mostrar la previsualización solo si se selecciona una imagen
            var preview = document.getElementById('preview');
            var reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
            };

            reader.readAsDataURL(file);
        } else {
            alert('Please select an image first.');
        }
    }
    </script>




</body>

</html>