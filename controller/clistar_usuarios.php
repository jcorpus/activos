<?php
require ("../model/model_user.php");

$accion = $_POST['accion'];

//echo "el valor de accion es:".$accion;

switch ($accion) {
	case 'listar':
		$instancia = new Usuario();
  		$a = $instancia->listar_usuarios();
  		///se imprime para poder exponerlos con jsosn_encode javascript
  		echo json_encode($a);
		break;
	case 'modificar':
		
		$id_usuario = $_POST['id_usuario'];
		$usu_estado = $_POST['usu_estado'];
		$inst = new Usuario();
		$consulta = $inst->modificar_usuario_estado($id_usuario,$usu_estado);
		echo $consulta;


		break;



	default:
		# code...
		break;
}



 ?>
