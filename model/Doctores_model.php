<?php

class Doctores_model{

    private $db;
    private $doctores;

     public function __construct(){
       $this->db=conectar::conectar();
       $this->doctores=array();

     }

    public function get_doctores(){
        $sql="SELECT * FROM doctores";
        $resultado=$this->db->query($sql);
        while($row=$resultado->fetch_assoc()){
            $this->doctores[]=$row;
        }
        return $this->doctores;
    }

    public function insertar($con,$nombre, $a,$cel,$tel,$cor,$dir,$esp){
        $resultado=$this->db->query("INSERT INTO doctores (contra,nombre,apellidos,celular,telefono,correo,direccion,especialidad) 
        values ('$con','$nombre','$a','$cel','$tel','$cor','$dir','$esp')");

    }
    public function eliminar($id){
        $data['id']=$id;
        $resultado=$this->db->query("DELETE FROM doctores WHERE id='$id'");
        
    }

    public function modificar($id,$con,$n,$ape,$cel,$t,$cor,$dir,$esp){

       $resultado=$this->db->query("UPDATE doctores SET contra='$con', 
       nombre='$n', apellidos='$ape', celular='$cel', telefono='$t', correo='$cor',
       direccion='$dir', especialidad='$esp'
        WHERE id='$id'");
        
    }
    
    public function get_doctor($id){
        $data['id']=$id;
        $sql="SELECT * FROM doctores WHERE id='$id' LIMIT 1";
        $resultado=$this->db->query($sql);
        $row=$resultado->fetch_assoc();
        return $row;

    }
}
?>
