<?php
require ("../model/model_departamento.php");

$accion = $_POST['accion'];
switch ($accion) {
	case 'listar':
		$instancia = new Departamento();
  		$a = $instancia->listar_departamentos();
  		echo json_encode($a);
		break;

	case 'registrar':
		$descripcion =trim($_POST['descripcion']);
		$estado =trim($_POST['estado']);
		$inst = new Departamento();
		$consulta = $inst->registrar_departamento($descripcion,$estado);
		echo $consulta;
		break;

	case 'modificar':
		$id_depa2 = $_POST['id_depa2'];
		$descripcion2 = trim($_POST['descripcion2']);
		$estado2 = trim($_POST['estado2']);
		$inst = new Departamento();
		$consulta = $inst->modificar_departamento($id_depa2,$descripcion2,$estado2);
		echo $consulta;
		break;



	default:
		# code...
		break;
}



 ?>
