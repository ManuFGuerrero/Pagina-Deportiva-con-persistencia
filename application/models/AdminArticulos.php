<?php

class AdminArticulos extends CI_Model {

 

    function __construct() { 
        parent::__construct();
    }

    
    public function seInsertaArticulo($nombre,$descripcion,$precio,$stock){

        return $consulta=$this->db->query("INSERT INTO articulo (nombre,descripcion,precio,stock) VALUES('$nombre' , '$descripcion','$precio','$stock') ");

    }

    public function traerArticulos(){
        $consulta=$this->db->get('articulo');
        if($consulta->num_rows()>0){
            return $consulta;
        }else{
            return false;
        }

    }

    public function getArticulo($id){
        $consulta=$this->db->query("SELECT * from articulo WHERE idArticulo ='$id'");
        if ($consulta->num_rows()==1){
            return $consulta->row();
        }else{
            return false;
        }
    }

    public function modificarArticulo ($data,$id){
        $this->db->where("idArticulo = '$id'");
        return  $this->db->update('articulo',$data);
        
        
    }

    public function eliminarArticulo ($id){ // LLEVA EL STOCK A 0 
       return $consulta=$this->db->query("UPDATE articulo set stock=0   WHERE idArticulo ='$id'");
    }


}