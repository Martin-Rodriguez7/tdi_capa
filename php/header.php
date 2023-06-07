<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estiloMain.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

    <title>Nuevo Main</title>
</head>

<body>
    <div class="d-flex">
    <div id="sidebar-container" class="bg-primary shadow-lg d-none d-sm-inline ps-4 pe-4 pt-2">
    <div class="logo border-bottom border-secondary text-center">
        <img src="../img/logo.png" width="130" height="75" alt="logotdi" class="m-2">
    </div>
    <div class="estado fs-5 border-bottom border-secondary text-center pt-2 pb-2">
        <a class="navsidebar status">Estado: <i class="fas fa-circle statusCir"></i> <span>Activo</span></a>
    </div>
    <div class="menu">
        <ul class="nav mt-2 nav-pills container">
            <li class="nav-item">
                <a href="./altaUser.php" class="navsidebar d-block pt-2 text-light text-center fs-5">
                    <i class="ion-ios-contact fs-5 me-2"></i>Alta de Usuarios
                </a>
            </li>
            <li class="nav-item">
                <a href="./listUser.php" class="navsidebar d-block pt-2 text-light text-center fs-5">
                    <i class="ion ion-md-list-box me-2 fs-5"></i>Lista de Usuarios
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="navsidebar d-block pt-2 text-light text-center fs-5 dropdown-toggle" data-toggle="dropdown">
                    <i class="icon ion-ios-browsers me-2 fs-5"></i>Informacion
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Submenú 1</a>
                    <a class="dropdown-item" href="#">Submenú 2</a>
                    <a class="dropdown-item" href="#">Submenú 3</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="navsidebar d-block pt-2 text-light text-center fs-5 dropdown-toggle" data-toggle="dropdown">
                    <i class="ion-ios-paper me-2 fs-5"></i>Formularios
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Submenú 1</a>
                    <a class="dropdown-item" href="#">Submenú 2</a>
                    <a class="dropdown-item" href="#">Submenú 3</a>
                </div>
            </li>
        </ul>
    </div>
</div>


        <div class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="btn-group container-fluid d-md-none d-lg-block d-lg-none d-xl-block d-xl-none d-sm-none d-md-block">
                            <ul class="nav mt-2 nav-pills container gap-2">

                                <a href="./altaUser.php" class="navcol p-1 border rounded">Alta de usuarios</a>


                                <a href="./listUser.php" class="navcol p-1 border rounded">Lista de Usuarios</a>


                                <a href="./tabinfo.php" class="navcol p-1 border rounded">Informacion</a>


                                <a href="./forms.php" class="navcol p-1 border rounded">Formularios</a>

                            </ul>
                        </div>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <form class="d-flex form-check-inline position-relative my-2 d-inline-block">
                                <input class="rounded-2  p-2 btn-buscar" name="buscar" type="search" placeholder="Buscar" aria-label="Buscar">
                                <button class="btn btn-primary btn-buscar p-2 ms-1" type="submit"><i class="icon icon-search ion-md-search "></i></button>
                            </form>
                            <div class="nav-item dropdown d-flex">
                                <a class="nav-link dropdown-toggle fw-bold fs-5 pt-0 m-0" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../img/user-perfil.jpeg" class="img-fluid rounded-1 me-2 avatar-perfil" alt="img-user-perfil">
                                    Rodriguez Martin
                                    <p class="user-rol fs-6 fw-light ms-5 position-absolute">Proyect
                                        Manager</p>
                                </a>
                                <ul class="dropdown-menu ms-3 position-absolute" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Mi Perfil</a></li>
                                    <li><a class="dropdown-item" href="#">Configuracion</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </div>
            </nav>