<?php 
class Panel extends CI_Controller
{
	function __construct(){		
		parent::__construct();
		$this->load->library('session');
	}
	function index(){
		$year = 'Derechos Reservados '.date('Y',time()).' - Electivo';
		$data = array('titulo'=>'LOGIN');
		if($this->session->userdata('login')){
			redirect(base_url()."panel/inicio");
		}else{
			$this->load->view("index",$data);
		}
/*
        $contenido_interno = array(
            'lectores' => $this->Lectores_model->getLectores(),
        );
        $contenido_exterior = array(
            'title'     => 'Lectores',
            'contenido' => $this->load->view('backend/lectores/index', $contenido_interno, true),
        );
        $this->load->view('backend/template', $contenido_exterior);
*/
	}

	function inicio(){
		$result = "hola";
		if($this->session->userdata('login')){
			$data = array('titulo2'=>"Lista de Categorias",
					  'titulo'=> "Categorias",
					  'contenido'=>$this->load->view("inicio",$result,true));
		$this->load->view("plantilla",$data);
		}else{
			$this->load->view("index");
		}
	}






}

 ?>