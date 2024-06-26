<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaginaPrincipal extends CI_Controller {


    public function MostrarInicio(){


        $this->load->view('principal/nav/navGeneral');
        $this->load->view('principal/paginaP');
        $this->load->view ("principal/footer");

    }
    public function MostrarInicioVisitante(){


        $this->load->view('principal/nav/navVisita');
        $this->load->view('principal/paginaP');
        $this->load->view("inicio/vistaVisitante");
        $this->load->view ("principal/footer");

    }

    public function MostrarInicioAdmin(){


        $this->load->view('principal/nav/navAdmin');
        $this->load->view('principal/paginaP');
        $this->load->view ("principal/footer");

    }

    public function MostrarListaProductos(){
        $this->load->database(); 
        
        $this->load->model('AdminArticulos');
        $lstArt['artic'] = $this->AdminArticulos->traerArticulos();

        $this->load->view('principal/nav/navGeneral');
        $this->load->view ('principal/listaArticulos',$lstArt);
    }

    public function MostrarListaProductosVisita(){
        $this->load->database(); 
        
        $this->load->model('AdminArticulos');
        $lstArt['artic'] = $this->AdminArticulos->traerArticulos();

        $this->load->view('principal/nav/navVisita');
        $this->load->view ('principal/listaArticulosVisitante',$lstArt);
    }
    
    public function MostrarListaProductosAdmin(){
        $this->load->database(); 
        
        $this->load->model('AdminArticulos');
        $lstArt['artic'] = $this->AdminArticulos->traerArticulos();
        $this->load->view('principal/nav/navAdmin');
        $this->load->view ('principal/listaArticulosAdmin',$lstArt);
        //vista especial para modificar eliminar y agregar

    }


    public function RegistraCliente(){
        $this->load->database(); 

        $cliente=$_POST['nombre'];
        $mail=$_POST['mail'];
        $dni=$_POST['dni'];

        $this->load->model('AdminCliente');
        if ($this->AdminCliente->insertaCliente($cliente,$mail,$dni) == 1 ){
            $this->load->view("inicio/registroExitoso");
            $this->load->view('principal/nav/navGeneral');
            $this->load->view("principal/paginaP");
            
            $this->load->view ("principal/footer");
        }

      
        
    }

    public function MuestraProductoAdmin ($id){

        $this->load->database(); 
            
        $this->load->model('AdminArticulos');
    
        $data['artic']=$this->AdminArticulos->getArticulo($id);  
        $data['id']=$id;
    
        $this->load->view("principal/nav/navAdmin");
        $this->load->view ('principal/productoParticular', $data);
        $this->load->view ('principal/footer');
    
    }   
    
    public function MuestraProductoGeneral($id){
    
        $this->load->database(); 
            
        $this->load->model('AdminArticulos');
    
        $data['artic']=$this->AdminArticulos->getArticulo($id);  
        $data['id']=$id;
    
        $this->load->view ('principal/nav/navGeneral');
        $this->load->view ('principal/productoParticular', $data);
        $this->load->view ('principal/footer');
        
    
    }

    public function MuestraProductoVisita($id){
        
        $this->load->database(); 
            
        $this->load->model('AdminArticulos');
    
        $data['artic']=$this->AdminArticulos->getArticulo($id);  
        $data['id']=$id;
    
        $this->load->view ('principal/nav/navVisita');
        $this->load->view ('principal/productoParticular', $data);
        $this->load->view ('principal/footer');
    }

}


