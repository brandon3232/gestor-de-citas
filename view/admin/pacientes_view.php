<?php include("../../includes/header.php") ?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid ">
        <a class="navbar-brand ms-lg-5" href="#">Clinica</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav w-100 d-flex justify-content-between">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="menu_admin.php">Menu</a>
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
                    <form id="nuevo" name="nuevo" method="POST" action="index.php?controller=pacientes&accion=guarda" autocomplete="off">
                        <div class="mb-3">
                            <label for="placa" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="IDnombre" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="modelo" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="IDapellidos" name="apellidos">
                        </div>
                        <div class="mb-3">
                            <label for="marca" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="IDcontrasena" name="contraseña">
                        </div>
                        <div class="mb-3">
                            <label for="anio" class="form-label">Celular</label>
                            <input type="text" class="form-control" id="IDcelular" name="celular">
                        </div>
                        <div class="mb-3">
                            <label for="color" class="form-label">Telefono</label>
                            <input type="text" class="form-control" id="IDtelefono" name="telefono">
                        </div>
                        <div class="mb-3">
                            <label for="color" class="form-label">Fecha de nacimiento</label>
                            <input type="text" class="form-control" id="IDcorreo" name="fn">
                        </div>
                        <div class="mb-3">
                            <label for="color" class="form-label">Direccion</label>
                            <input type="text" class="form-control" id="IDdireccion" name="direccion">
                        </div>
                        <div class="mb-3">
                            <label for="color" class="form-label">Nombre del responsable</label>
                            <input type="text" class="form-control" id="IDres" name="res">
                        </div>
                        <div class="mb-3">
                            <label for="color" class="form-label">Celular del responsable</label>
                            <input type="text" class="form-control" id="IDcr" name="cr">
                        </div>

                        <input type="submit" value="Guardar" id="guardar" name="guardar" class="btn btn-primary">
                    </form>
                </div>
            </div>

        </div>

        <div class="col-12 col-xxl-9">
            <table class="table table-striped table-light">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Contraseña</th>
                        <th>Celular</th>
                        <th>Telefono</th>
                        <th>Fecha nacimiento</th>
                        <th>Direccion</th>
                        <th>Nom responsable</th>
                        <th>Num responsable</th>
                        <th>acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($data["vehiculos"] as $dato) {


                        echo "<tr>";

                        echo "<td>" . $dato["nombre"] . "</td>";
                        echo "<td>" . $dato["apellidos"] . "</td>";
                        echo "<td>" . $dato["contrasena"] . "</td>";
                        echo "<td>" . $dato["celular"] . "</td>";
                        echo "<td>" . $dato["telefono"] . "</td>";
                        echo "<td>" . $dato["fecha_nacimiento"] . "</td>";
                        echo "<td>" . $dato["direccion"] . "</td>";
                        echo "<td>" . $dato["nombre_responsable"] . "</td>";
                        echo "<td>" . $dato["cel_responasable"] . "</td>";
                        echo "<td>";
                        echo "<button class=\"btn btn-success me-1\"><a class=\"text-light\" href='index.php?controller=vehiculos&accion=modificar&id=" . $dato["id"] . "'><i class=\"fa-solid fa-pen\"></i> </a></button>";


                        echo "<button class=\"btn btn-danger\"><a class=\"text-light\" href='index.php?controller=vehiculos&accion=eliminar&id=" . $dato["id"] . "'><i class=\"fa-solid fa-trash\"></a></button>";
                        echo "</td>";

                        echo "</tr>";
                    }
                    ?>

                </tbody>
            </table>
        </div>

    </div>


    <?php include("../../includes/footer.php") ?>