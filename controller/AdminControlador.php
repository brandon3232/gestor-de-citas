<?php
    class AdminControl{
        public function __construct(){
            require_once "model/Admin_model.php";
        }

        public function index(){
            $user=$_POST['usuario'];
            $pas=$_POST['contrase'];

            $usuario = new Admin_model();

            $data=$usuario->get_user($user,$pas);

            if($data==1){
                require_once "view/menu_admin.php";
                
            }
            else{
                require_once "view/login.php";
            }
        }
    }
?>
