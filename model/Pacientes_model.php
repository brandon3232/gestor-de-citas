<?php

class Pacientes_model{

    private $db;
    private $pacientes;

     public function __construct(){
       $this->db=conectar::conectar();
       $this->pacientes=array();

     }

    public function get_pacientes(){
        $sql="SELECT * FROM pacientes";
        $resultado=$this->db->query($sql);
        while($row=$resultado->fetch_assoc()){
            $this->pacientes[]=$row;
        }
        return $this->pacientes;
    }

    public function insertar($nombre, $apellido,$fn,$direccion,$celular,$tel,$contra,$nombreresp,$celresp){

        $resultado=$this->db->query("INSERT INTO pacientes(nombre, apellido, fecha_nacimiento, direccion, celular, telefono, contrasena, nombre_responsable, cel_responsable) VALUES ('$nombre','$apellido','$fn','$direccion','$celular','$tel','$contra','$nombreresp','$celresp')");


    }
    public function eliminar($id){
        $data['id']=$id;
       $resultado=$this->db->query("DELETE FROM pacientes WHERE id='$id'");
        
    }

    public function modificar($id,$n,$a,$f,$d,$cel,$tel,$con,$nr,$cr){

       $resultado=$this->db->query("UPDATE pacientes SET nombre='$n', apellido='$a',
       fecha_nacimiento='$f', direccion='$d',celular='$cel',telefono='$tel',
       contrasena='$con', nombre_responsable='$nr', cel_responsable='$cr'
        WHERE id='$id'");
        
    }
    
    public function get_paciente($id){
        $data['id']=$id;
        
        $sql = "SELECT * FROM pacientes WHERE id='$id'";

        $resultado=$this->db->query($sql);
        $row=$resultado->fetch_assoc();
        return $row;

    }
}

?>
