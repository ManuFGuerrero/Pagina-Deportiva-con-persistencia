<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IniciarSesion extends CI_Controller {


    public function index(){


        $this->load->view('inicio/seleccion');

    }


    public function CargarVistaAdmin(){
        $this->load->view('inicio/vistaAdmin');
     }

    public function ValidaAdmin() {

        $this->load->database(); 


        $nombre=$_POST['usuario'];
        $pass=$_POST['clave'];

        
   
        $this->load->model('ValidarAdmin');
        
       if ($this->ValidarAdmin->esValidoAdmin($nombre,$pass) ){
             $this->load->view('principal/nav/navAdmin');
             $this->load->view ("principal/paginaP");
             $this->load->view ("principal/footer");
        
        }else{
            $this->load->view('inicio/vistaAdmin');
            $this->load->view('errors/errorIngreso');
        }

    }

    public function CargarVistaCliente(){
        $this->load->view('inicio/vistaCliente');
    }

    public function ValidaCliente(){

        $this->load->database(); 

        $dni=$_POST['clave'];

        $this->load->model('AdminCliente');
        
        if ($this->AdminCliente->esValidoCliente($dni)){
            $this->load->view('principal/nav/navGeneral');
            $this->load->view ("principal/paginaP");
            $this->load->view ("principal/footer");

        }else{
            $this->load->view('inicio/vistaCliente');
            $this->load->view('errors/errorIngreso');
        }
    }

    public function CargarVistaVisitante (){

        $this->load->view('principal/nav/navVisita');
        $this->load->view ("principal/paginaP");
        $this->load->view("inicio/vistaVisitante");
        $this->load->view ("principal/footer");

    }

}