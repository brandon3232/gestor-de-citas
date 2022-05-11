<?php

class Admin_model{

    private $db;
    private $doctores;
    private $pacientes;

     public function __construct(){
       $this->db=conectar::conectar();
     }

    public function get_user($u,$pa){
        $sql="SELECT * FROM user WHERE usuario='$u' AND contra='$pa'";
        $resultado=$this->db->query($sql);
        $row=$resultado->num_rows;
        return $row;
    }

}

?>
