<?php
require ("../model/model_activo.php");
$accion = $_POST['accion'];
switch ($accion) {
	case 'listar':
		$instancia = new Activo();
  		$a = $instancia->listar_activos();
  		echo json_encode($a);
		break;

	case 'registrar':
		date_default_timezone_set('America/Lima');
		$fecha = date('Y-m-d');
		$descripcion =trim($_POST['descripcion']);
		$cantidad =trim($_POST['cantidad']);
		$costo =trim($_POST['costo']);
		$estado =trim($_POST['estado']);
		$cbo_marca =trim($_POST['cbo_marca']);
		$tipo_activo =trim($_POST['tipo_activo']);
		$guia_control =trim($_POST['guia_control']);
		$tipo_ingreso =trim($_POST['tipo_ingreso']);
		$depreciacion =trim($_POST['depreciacion']);
		$years =trim($_POST['years']);
		$Porcentaje =trim($_POST['Porcentaje']);
		$residuo =trim($_POST['residuo']);
		$departamento =trim($_POST['departamento']);

		$inst = new Activo();
		$consulta = $inst->registrar_activo($fecha,$descripcion,$cantidad,$costo,$estado,$cbo_marca,$tipo_activo,$guia_control,$tipo_ingreso,$depreciacion,$years,$Porcentaje,$residuo,$departamento);
		echo $consulta;
		break;

	case 'modificar':
		$id_marca2 = $_POST['id_marca2'];
		$descripcion2 = trim($_POST['descripcion2']);
		$estado2 = trim($_POST['estado2']);
		$inst = new Activo();
		$consulta = $inst->modificar_marca($id_marca2,$descripcion2,$estado2);
		echo $consulta;
		break;

	case 'cbo_marca':
		$instancia = new Activo();
  		$a = $instancia->cbo_listar_marcas();
  		echo json_encode($a);
		break;
	case 'cbo_departamento':
		$instancia = new Activo();
  		$a = $instancia->cbo_departamento();
  		echo json_encode($a);
		break;
		
	case 'cbo_modelo':
		$id_marca = $_POST['id_marca'];
		$inst = new Activo();
		$consulta = $inst->cbo_listar_detalle($id_marca);
		echo json_encode($consulta);
		break;

	case 'cbo_tipoactivo':
		$inst = new Activo();
		$consulta = $inst->cbo_tipoactivo();
		echo json_encode($consulta);
		break;

	case 'cbo_guia':
		$inst = new Activo();
		$consulta = $inst->cbo_guia_control();
		echo json_encode($consulta);
		break;

	case 'cbo_tipoingreso':
		$inst = new Activo();
		$consulta = $inst->cbo_tipoingreso();
		echo json_encode($consulta);
		break;




	default:
		# code...
		break;
}



 ?>
