<?php

class DoctoresControlador
{

    public function __construct(){
        require_once "model/Doctores_model.php";
    }

    public function index()
    {

        $doctor = new Doctores_model();
        $data["titulo"] = "Doctores";
        $data["doctores"] = $doctor->get_doctores();
        require_once "view/admin/doctores_view.php";
    }

    public function guarda()
    {
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $contra = $_POST['contraseña'];
        $cel = $_POST['celular'];
        $tel = $_POST['telefono'];
        $cor = $_POST['correo'];
        $dir = $_POST['direccion'];
        $esp = $_POST['especialidad'];

        $doctores = new Doctores_model();
        $doctores->insertar($contra, $nombre, $apellidos, $cel, $tel, $cor, $dir, $esp);
        $data["titulo"] = "Doctores";

        $_SESSION['mensaje'] = "Paciente agregado correctamente";
        $_SESSION['tipo_mensaje'] = "success";

        $this->index();
    }

    public function eliminar($id)
    {

        $doctores = new Doctores_model();
        $doctores->eliminar($id);
        $data["titulo"] = "Doctores";

        $_SESSION['mensaje'] = "Paciente eliminado correctamente";
        $_SESSION['tipo_mensaje'] = "danger";

        $this->index();
    }
    public function modificar($id)
    {
        $doctores = new Doctores_model();
        $data['id']=$id;
        $data["doctores"] = $doctores->get_doctor($id);
        
        require_once "view/admin/doctor_modificar.php";
    }

    public function actualizar()
    {
        $id = $_POST["id"];
        $contra = $_POST["contra"];
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $cel = $_POST["celular"];
        $tel = $_POST["telefono"];
        $correo = $_POST["correo"];
        $direccion = $_POST["direccion"];
        $especialidad = $_POST["especialidad"];

        $doctores = new Doctores_model();
        $doctores->modificar($id, $contra, $nombre, $apellidos, $cel, $tel, $correo, $direccion, $especialidad);
        $data["titulo"] = "Doctores";

        $_SESSION['mensaje'] = "Paciente modificado correctamente";
        $_SESSION['tipo_mensaje'] = "success";

        $this->index();
    }
    
}
