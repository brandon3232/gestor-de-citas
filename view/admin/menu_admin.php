<?php include("../../includes/header.php") ?>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid ">
            <a class="navbar-brand ms-lg-5" href="#">Clinica</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav w-100 d-flex justify-content-between">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="menu_admin.php">Menu</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active me-md-5" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            perfil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Cerrar sesion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-5">
            <div class="container d-flex justify-content-center flex-wrap">
                <a href="../../index.php?controller=doctores&accion=index" class="mx-lg-3 my-2 my-lg-0">
                    <div class="img img-thumbnail shadow-lg img-doctores"></div>
                    <p class="text-center fs-3">Doctores</p>
                </a>
                <a href="../../index.php?controller=pacientes&accion=index" class="mx-lg-3 my-2 my-lg-0">
                    <div class="img img-thumbnail shadow-lg img-pacientes"></div>
                    <p class="text-center fs-3">Pacientes</p>
                </a>
            </div>
        </div>
    </div>




<?php include("../../includes/footer.php") ?>