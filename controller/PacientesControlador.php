<?php

class PacientesControlador{

public function __construct(){
    require_once "model/Pacientes_model.php";
}

public function index(){

$paciente = new Pacientes_model();
$data["titulo"]="Pacientes";
$data["pacientes"]=$paciente->get_pacientes();
require_once "view/admin/pacientes_view.php";

}

public function guarda(){
    
    $nombre= $_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $contra=$_POST['contraseña'];
    $cel=$_POST['celular'];
    $tel=$_POST['telefono'];
    $fn=$_POST['fn'];
    $dir=$_POST['direccion'];
    $res= $_POST['res'];
    $cel_res=$_POST['cr'];
    
   $pacientes = new Pacientes_model();
   $pacientes->insertar($nombre,$apellidos,$fn,$dir,$cel,$tel,$contra,$res,$cel_res);
   echo "2";

    $_SESSION['mensaje'] = "Paciente agregado correctamente";
    $_SESSION['tipo_mensaje'] = "success";

   $data["titulo"]="Pacientes";
   $this->index();
    
}

public function eliminar($id){
    $pacientes=new Pacientes_model();
    $pacientes->eliminar($id);
    echo "1";
    $data["titulo"]="Pacientes";
    
    $_SESSION['mensaje'] = "Paciente eliminado correctamente";
    $_SESSION['tipo_mensaje'] = "danger";

   $this->index();


}
public function modificar($id){
 $pacientes = new Pacientes_model();
 $data['id']=$id;
 $data["Pacientes"]=$pacientes->get_paciente($id);
 require_once "view/admin/paciente_modificar.php";
      
}

public function actualizar(){
    $id=$_POST["id"];
    $nombre=$_POST["nombre"];
    $ape=$_POST["apellidos"];
    $f_n=$_POST["f_n"];
    $dir=$_POST["direccion"];
    $cel=$_POST["celular"];
    $tel=$_POST["telefono"];
    $con=$_POST["contrasena"];
    $res=$_POST["responsable"];
    $cel_r=$_POST["res_cel"];
    
    $pacientes= new Pacientes_model();
    $pacientes->modificar($id,$nombre,$ape,$f_n,$dir,$cel,
    $tel,$con,$res,$cel_r);
    $data["titulo"]="Pacientes";

    $_SESSION['mensaje'] = "Paciente actualizado correctamente";
    $_SESSION['tipo_mensaje'] = "success";

    $this->index();

}

}
?>
