<?php

class AdminCliente extends CI_Model {

 

    function __construct() { 
        parent::__construct();
    }

    
    public function esValidoCliente($dni){
        $consulta = $this->db->query("SELECT dni FROM cliente WHERE dni =' $dni  ' ");
        if ($consulta->num_rows() == 1){
            return true;
        }else{
            return false;
        }

    }

    public function insertaCliente($nombre,$mail,$dni){
        return $consulta = $this->db->query("INSERT INTO cliente (nombre,mail,dni)  VALUES ('$nombre','$mail','$dni') ");
        
    }

    public function eliminarCliente($id){
        $this->db->where("idCliente",$id);
        return $this->db->delete('cliente');
    }

    public function getCliente($id){
        $consulta=$this->db->query("SELECT * from cliente WHERE idCliente ='$id'");
        if ($consulta->num_rows()==1){
            return $consulta->row();
        }else{
            return false;
        }
    }

    public function modificarCliente($data,$id){
        $this->db->where("idCliente = '$id'");
        return  $this->db->update('cliente',$data);
    }

    public function traerClientes(){
        $consulta= $this->db->get('cliente');
        if($consulta->num_rows()>0){
            return $consulta;
        }else{
            return false;
        }
    }

}