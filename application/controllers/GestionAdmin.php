<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GestionAdmin extends CI_Controller {

    public function MostrarListaClientes(){

        $this->load->database(); 
        
        $this->load->model('AdminCliente');
        $lstClientes['cliente'] = $this->AdminCliente->traerClientes();

        $this->load->view('principal/nav/navAdmin');
        $this->load->view ('gestion/listaClientes', $lstClientes);

    }



    public function ModificaArticulo($id){

        $this->load->database(); 
        
        $this->load->model('AdminArticulos');

        $data['artic']=$this->AdminArticulos->getArticulo($id);  
        $data['id']=$id;

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $nombre =$this->input->post('nombre');
            $descripcion =$this->input->post('descripcion');
            $precio =$this->input->post('precio');
            $stock=$this->input->post('stock');

            $data = array(

                'nombre' =>$nombre,
                'descripcion' => $descripcion,
                'precio' => $precio,
                'stock' => $stock
    
            );

            $this->load->model("AdminArticulos");
            $this->AdminArticulos->modificarArticulo($data, $id);
        
            redirect(base_url('PaginaPrincipal/MostrarListaProductosAdmin'));

        }
        $this->load->view('principal/nav/navAdmin');
        $this->load->view('gestion/modificacionArticulo', $data);


    }
    
    
    public function EliminaArticulo ($id){

        if(is_numeric($id)){
        $this->load->database(); 
        
        $this->load->model('AdminArticulos');

        $this->AdminArticulos->eliminarArticulo($id);

        redirect(base_url('PaginaPrincipal/MostrarListaProductosAdmin'));
        }

    }
    
    public function mostrarVistaAgregar(){


    }

    public function AgregaArticulo (){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre =$_POST['nombre'];
        $descripcion =$_POST['descripcion'];
        $precio =$_POST['precio'];
        $stock=$_POST['stock'];

        $this->load->database(); 
        
        $this->load->model('AdminArticulos');

        if ($this->AdminArticulos->seInsertaArticulo($nombre,$descripcion,$precio,$stock) == 1){
            //VISTA DE ARTICULO INSERTADO

            redirect(base_url('PaginaPrincipal/MostrarListaProductosAdmin'));

        }
     }else{
        $this->load->view('principal/nav/navAdmin');
        $this->load->view('gestion/agregarArticulo');
     }


    }

    public function AgregaCliente (){
        $this->load->database(); 

        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $cliente=$_POST['nombre'];
            $mail=$_POST['mail'];
            $dni=$_POST['dni'];

         $this->load->model('AdminCliente');

            $this->AdminCliente->insertaCliente($nombre,$mail,$dni);

         redirect(base_url('GestionAdmin/MostrarListaClientes'));
            //MENSAJE DE CLIENTE AGREGADO CON EXITO
        }else{
        $this->load->view('principal/nav/navAdmin');
        $this->load->view('gestion/agregarCliente');
        }
    }

    public function EliminaCliente ($id){

        $this->load->database(); 
        $this->load->model('AdminCliente');
        $this->AdminCliente->eliminarCliente($id);

        redirect(base_url('GestionAdmin/MostrarListaClientes'));
        //MENSAJE DE CLIENTE ELIMINADO CON EXITO
    }

    public function ModificaCliente($id){

        $this->load->database(); 
        
        $this->load->model('AdminCliente');

        $data['artic']=$this->AdminCliente->getCliente($id);  
        $data['id']=$id;

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $nombre =$this->input->post('nombre');
            $mail =$this->input->post('mail');
            $dni =$this->input->post('dni');

            $data = array(

                'nombre' =>$nombre,
                'mail' => $mail,
                'dni' => $dni
            );

            $this->load->model("AdminCliente");
            $this->AdminCliente->modificarCliente($data, $id);
        
            redirect(base_url('GestionAdmin/MostrarListaClientes'));

        }
        $this->load->view('principal/nav/navAdmin');
        $this->load->view('gestion/modificacionCliente', $data);


        
    }

}