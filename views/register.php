<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@200;300;400;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css" />
    <script src="../scripts_js/validacion.js"></script>
    <title>Mini Proyecto Nivel 3</title>
</head>

<body>
    <div class="container">
        <div class="col-4 mx-auto login">
            <form action="../scripts_php/registrar_usuario.php" method="post" name="loginForm">
                <div>
                    <img src="../assets/devchallenges.svg" alt="" class="container-logo">
                </div>

                <div>
                    <h2>Join thousands of learners from around the world </h2>
                    <h3>Master web development by making real-life projects. There are multiple paths for you to choose
                    </h3>
                </div>
                <div id="error-message" class="alert alert-danger mt-2" style="display: none; margin:0"></div>
                <div class="">
                    <div class="icono-input">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <input type="text" class="form-control " placeholder="Email" name="email" />
                </div>
                <div class=" ">

                    <div class="icono-input">
                        <i class="bi bi-lock-fill"></i>
                    </div>
                    <input type="password" class="form-control " placeholder="Password" name="contraseña" />
                </div>
                <div class="container-btn">
                    <button type="submit" class="my-3 form-control btn btn-primary btn-login">Start coding now </button>
                </div>
                <div class="container-text">
                    <p>or continue with these social profile</p>
                </div>
                <div class="container-redes">
                    <img src="../assets/Google.svg" alt="">
                    <img src="../assets/Facebook.svg" alt="">
                    <img src="../assets/Twitter.svg" alt="">
                    <img src="../assets/Gihub.svg" alt="">
                </div>
                <div class="container-text">
                    <p>Adready a member? <a href="../index.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>