<?php

    function cargarControlador($controlador) {

        $nombreControlador = ucwords($controlador)."Controlador";
        $archivoControlador = "controler/".ucwords($nombreControlador).'.php'; 

        if (!is_file($archivoControlador)) {
            $nombreControlador = ucwords(CONTROLADOR_PRINCIPAL)."Controlador";
            $archivoControlador = "controler/".ucwords($nombreControlador).'.php'; 
        }

        require_once $archivoControlador;
        $control = new $nombreControlador(); 
        return $control;
    }

    function cargarAccion($controller,$accion, $id = null) {

        if (isset($accion) && method_exists($controller,$accion)) {
            if ($id == null) {
                $controller->$accion();
            }else {
                $controller->$accion($id);
            }
        }else {
            $accionPrincipal = ACCION_PRINCIPAL;
            $controller->$accionPrincipal();
        }
    }

?>