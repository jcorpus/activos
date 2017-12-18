<?php
require ("../model/model_rotacion.php");

$accion = $_POST['accion'];
switch ($accion) {
	case 'buscar_activo':
		$instancia = new Rotacion();
  		$a = $instancia->buscar_activo();
  		echo json_encode($a);
		break;


	case 'cbo_departamento':
		$inst = new Rotacion();
		$consulta = $inst->cbo_departamento();
		echo json_encode($consulta);
		break;

	case 'listar_rotacion':
		$inst = new Rotacion();
		$consulta = $inst->listar_rotacion();
		echo json_encode($consulta);
		break;


	case 'registrar':

		$id_activo =trim($_POST['id_activo']);
		$nombre_rotacion =trim($_POST['nombre_rotacion']);
		$destino_departamento =trim($_POST['destino_departamento']);
		$estado =trim($_POST['estado']);
		$inst = new Rotacion();
		$consulta = $inst->registrar_rotacion($id_activo,$nombre_rotacion,$destino_departamento,$estado);
		echo $consulta;
		break;

	default:
		# code...
		break;
}



 ?>
