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
    <link rel="stylesheet" href="style.css" />
    <title>Mini Proyecto Nivel 3</title>
</head>

<body>
    <div class="container">
        <div class="col-4 mx-auto login">
            <form action="views/login_db.php" method="post">
                <div>
                    <img src="./assets/devchallenges.svg" alt="" class="container-logo">
                </div>
                <div>
                    <h2>Login</h2>
                </div>
                <div class="">
                    <div class="icono-input">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <input type="text" class="form-control " id="exampleFormControlInput1" placeholder="Username"
                        name="usuario" />
                </div>
                <div class=" ">

                    <div class="icono-input">
                        <i class="bi bi-lock-fill"></i>
                    </div>
                    <input type="password" class="form-control " id="exampleFormControlInput1" placeholder="Password"
                        name="contraseña" />
                </div>
                <div class="container-btn">
                    <button type="submit" class="my-3 form-control btn btn-primary btn-login">Login</button>
                </div>
                <div class="container-text">
                    <p>or continue with these social profile</p>
                </div>
                <div class="container-redes">
                    <img src="./assets/Google.svg" alt="">
                    <img src="./assets/Facebook.svg" alt="">
                    <img src="./assets/Twitter.svg" alt="">
                    <img src="./assets/Gihub.svg" alt="">
                </div>
                <div class="container-text">
                    <p>Don´t have an account yet? <a href="/views/register.php">Register</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>