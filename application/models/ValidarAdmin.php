<?php

class ValidarAdmin extends CI_Model {

 

    function __construct() { 
        parent::__construct();
    }

    
    public function esValidoAdmin($nombre,$pass){
        $consulta = $this->db->query("SELECT user, pass FROM admin WHERE user='" . $nombre . "' AND pass='" . $pass . "'");
        if ($consulta->num_rows() == 1){
            return true;
        }else{
            return false;
        }

    }

}