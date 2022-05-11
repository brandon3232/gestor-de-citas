<?php

    require_once "config/config.php";
    require_once "core/rutas.php";
    require_once "config/bd.php";
    require_once "controler/DoctoresControlador.php";
    require_once "controler/PacientesControlador.php";
    require_once "controler/AdminControlador.php";


    
    if (isset($_GET['controller'])) {
        
        $controlador = cargarControlador($_GET['controller']); 

        if (isset($_GET['accion'])) {
            if (isset($_GET['id'])) {
            cargarAccion($controlador,$_GET['accion'],$_GET['id']);
            }else {
                cargarAccion($controlador,$_GET['accion']);
            }
        }else {
            cargarAccion($controlador,ACCION_PRINCIPAL);
        }
        
    }else {
            require_once "view/login.php";
    } 
 
?>
