<?php 


/**
* 
*/
class Csignup extends CI_Controller
{
	
		function __construct(){

		parent::__construct();
		$this->load->model('musuario');
		$this->load->library('session');
	}

	public function index(){

		$this->load->view("signup");

	}

	public function registrar_usuario(){

		$dni = 		$this->input->post("nDni");
    	$usuario =  $this->input->post("nUsuario");
    	$clave =    $this->input->post("nClave");

/*

		 $datos_usuario = array(
                'usu_nombre' => $descripcion,
                'estado' => $estado,
            );
				$this->mdepartamento->add_departamento($data_departamento);
				redirect(base_url() . "cdepartamento/agregar");
*/


}









}


 ?>