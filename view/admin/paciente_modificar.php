<?php include("includes/header.php") ?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid ">
        <a class="navbar-brand ms-lg-5" href="#">Clinica</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav w-100 d-flex justify-content-between">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="view/admin/menu_admin.php">Menu</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active me-md-5" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-12 col-xxl-3 mb-3 mb-xxl-0">

            <?php if (isset($_SESSION['mensaje'])) { ?>

                <div class="alert alert-<?= $_SESSION['tipo_mensaje']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['mensaje'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            <?php session_unset();
            } ?>


            <div class="card ">
                <div class="card-body">
                    <form id="nuevo" name="nuevo" method="POST" action="index.php?controller=pacientes&accion=actualizar" autocomplete="off">
                        
                        <input type="hidden" id="id" name="id" value="<?php echo $data['id']?>">

                        <div class="mb-3">
                            <label for="placa" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" value="<?php echo $data["Pacientes"]["nombre"] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="modelo" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" value="<?php echo $data['Pacientes']['apellido'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="marca" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="contrasena" value="<?php echo $data['Pacientes']['contrasena'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="anio" class="form-label">Celular</label>
                            <input type="text" class="form-control" name="celular" value="<?php echo $data['Pacientes']['celular'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="color" class="form-label">Telefono</label>
                            <input type="text" class="form-control" name="telefono" value="<?php echo $data['Pacientes']['telefono'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="color" class="form-label">Fecha de nacimiento</label>
                            <input type="text" class="form-control" name="f_n" value="<?php echo $data['Pacientes']['fecha_nacimiento'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="color" class="form-label">Direccion</label>
                            <input type="text" class="form-control" name="direccion" value="<?php echo $data['Pacientes']['direccion'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="color" class="form-label">Nombre del responsable</label>
                            <input type="text" class="form-control" name="responsable" value="<?php echo $data['Pacientes']['nombre_responsable'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="color" class="form-label">Celular del responsable</label>
                            <input type="text" class="form-control" name="res_cel" value="<?php echo $data['Pacientes']['cel_responsable'] ?>">
                        </div>

                        <input type="submit" value="Guardar" id="guardar" name="guardar" class="btn btn-primary">
                    </form>
                </div>
            </div>

        </div>

    </div>


    <?php include("includes/footer.php") ?>