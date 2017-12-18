<?php
require ("../model/model_tipoingreso.php");

$accion = $_POST['accion'];
switch ($accion) {
	case 'listar':
		$instancia = new Tipo_ingreso();
  		$a = $instancia->listar_tipos();
  		echo json_encode($a);
		break;

	case 'registrar':
		$descripcion =trim($_POST['descripcion']);
		$estado =trim($_POST['estado']);
		$inst = new Tipo_ingreso();
		$consulta = $inst->registrar_tipo($descripcion,$estado);
		echo $consulta;
		break;

	case 'modificar':
		$id_tipo2 = $_POST['id_tipo2'];
		$descripcion2 = trim($_POST['descripcion2']);
		$estado2 = trim($_POST['estado2']);
		$inst = new Tipo_ingreso();
		$consulta = $inst->modificar_tipo($id_tipo2,$descripcion2,$estado2);
		echo $consulta;
		break;



	default:
		# code...
		break;
}



 ?>
