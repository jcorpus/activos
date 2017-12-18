<?php
require ("../model/model_marca.php");

$accion = $_POST['accion'];
switch ($accion) {
	case 'listar':
		$instancia = new Marca();
  		$a = $instancia->listar_marcas();
  		echo json_encode($a);
		break;

	case 'registrar':
		$descripcion =trim($_POST['descripcion']);
		$estado =trim($_POST['estado']);
		$inst = new Marca();
		$consulta = $inst->registrar_marca($descripcion,$estado);
		echo $consulta;
		break;

	case 'modificar':
		$id_marca2 = $_POST['id_marca2'];
		$descripcion2 = trim($_POST['descripcion2']);
		$estado2 = trim($_POST['estado2']);
		$inst = new Marca();
		$consulta = $inst->modificar_marca($id_marca2,$descripcion2,$estado2);
		echo $consulta;
		break;



	default:
		# code...
		break;
}



 ?>
