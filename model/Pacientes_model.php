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

    public function insertar($nombre, $a,$fn,$d,$c,$t,$con,$nr,$cr){

   echo "3";
        $resultado=$this->db->query("INSERT INTO pacientes (nombre,apellido,direccion,celular,telefono,contrasena,nombre_responsable,cel_responsable) values ('$nombre','$a','$d','$c','$t','$con','$nr','$cr')");
   echo "4";

    }
    public function eliminar($id){
       $resultado=$this->db->query("DELETE FROM pacientes WHERE id_paciente='$id'");
        
    }

    public function modificar($id,$n,$a,$f,$d,$cel,$tel,$con,$nr,$cr){

       $resultado=$this->db->query("UPDATE  pacientes SET nombre='$n', apellidos='$a',
       fecha_nacimiento='$f', direccion='$d',celular='$cel',telefono='$tel',
       contrasena='$con', nombre_responsable='$nr', cel_responsable='$cr'
        WHERE id_paciente='$id'");
        
    }
    
    public function get_paciente($id){
        $sql="SELECT * FROM pacientes WHERE id_paciente='$id' LIMIT 1";
        $resultado=$this->db->query($sql);
        $row=$resultado->fetch_assoc();
        return $row;

    }
}

?>
