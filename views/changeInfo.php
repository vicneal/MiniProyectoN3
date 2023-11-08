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
                    <img src="../assets/Facebook.svg" alt="">
                    <a class="btn  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Xanthe Neal
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
                        <li class="py-3 logout"><a class="dropdown-item d-flex gap-3 " href="#"> <i
                                    class="bi bi-box-arrow-right"></i>
                                <span>Logout</span></a></li>
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
                            <button class="btn btn-outline-secondary px-4 btn-edit">Edit</button>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="container-li d-flex align-items-center justify-content-start my-3">
                        <div class="col-4">
                            <p class="profile-cabecera-datos">PHOTO</p>
                        </div>
                        <div class="col-8"><img src="../assets/Google.svg" alt=""></div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="container-li d-flex align-items-center justify-content-start my-3">
                        <div class="col-4">
                            <p class="profile-cabecera-datos">NAME</p>
                        </div>
                        <div class="col-8">
                            <p class="profile-datos">Xanthe Neal</p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="container-li d-flex align-items-center justify-content-start my-3">
                        <div class="col-4">
                            <p class="profile-cabecera-datos">BIO</p>
                        </div>
                        <div class="col-8">
                            <p class="profile-datos">I am a software developer and a big fan of devchallenges...</p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="container-li d-flex align-items-center justify-content-start my-3">
                        <div class="col-4">
                            <p class="profile-cabecera-datos">PHONE</p>
                        </div>
                        <div class="col-8">
                            <p class="profile-datos">908249274292</p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="container-li d-flex align-items-center justify-content-start my-3">
                        <div class="col-4">
                            <p class="profile-cabecera-datos">EMAIL</p>
                        </div>
                        <div class="col-8">
                            <p class="profile-datos">xanthe.neal@gmail.com</p>
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

            </ul>
        </div>
    </main>
</body>

</html>