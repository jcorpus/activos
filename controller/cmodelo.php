<?php
require ("../model/model_modelo.php");

$accion = $_POST['accion'];
switch ($accion) {
	case 'listar':
		$instancia = new Modelo();
  		$a = $instancia->listar_modelos();
  		echo json_encode($a);
		break;

	case 'registrar':
		$descripcion =trim($_POST['descripcion']);
		$estado =trim($_POST['estado']);
		$inst = new Modelo();
		$consulta = $inst->registrar_modelo($descripcion,$estado);
		echo $consulta;
		break;

	case 'modificar':
		$id_modelo2 = $_POST['id_modelo2'];
		$descripcion2 = trim($_POST['descripcion2']);
		$estado2 = trim($_POST['estado2']);
		$inst = new Modelo();
		$consulta = $inst->modificar_modelo($id_modelo2,$descripcion2,$estado2);
		echo $consulta;
		break;



	default:
		# code...
		break;
}



 ?>
