<?php

    require_once "config/config.php";
    require_once "core/rutas.php";
    require_once "config/bd.php";
    require_once "controller/DoctoresControlador.php";
    require_once "controller/PacientesControlador.php";
    require_once "controller/AdminControlador.php";


    
    if (isset($_GET['controller'])) {
        $controlador = cargarControlador($_GET['controller']); 
        if (isset($_GET['accion'])) {
            if (isset($_GET['id'])) {
            cargarAccion($controlador,$_GET['accion'],$_GET['id']);
            }else {
                cargarAccion($controlador,$_GET['accion']);
            }
        }else {
            echo "no existe accion";
            cargarAccion($controlador,ACCION_PRINCIPAL);
        }
        
    }else {
            require_once "view/admin/menu_admin.php";
    } 
 
?>
