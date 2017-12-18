<?php

if(!isset($_GET['p'])){
	$titulo = 'Inicio';
	$contenido = 'view/admin/admin-home.php';
}
else if($_GET['p'] == 'list_usuarios'){
	$titulo = 'Lista de Usuarios';
	$contenido = 'view/usuario/lista_usuario.php';
}
/************ MARCA ***********/
else if($_GET['p'] =='reg_marca'){
	$titulo = 'Registro de Marca';
	$contenido = 'view/marca/reg_marca.php';
}

else if($_GET['p'] =='reg_modelo'){
	$titulo = 'modelo';
	$contenido = 'view/modelo/reg_modelo.php';
}

/************ ACTIVO ***********/
else if($_GET['p'] =='reg_activo'){
	$titulo = 'Registro de Marca';
	$contenido = 'view/activo/reg_activo.php';
}
else if($_GET['p'] =='list_activo'){
	$titulo = 'modelo';
	$contenido = 'view/activo/list_activo.php';
}
/************ ROTACION ***********/
else if($_GET['p'] =='reg_rotacion'){
	$titulo = 'Registro de Marca';
	$contenido = 'view/rotacion/reg_rotacion.php';
}
else if($_GET['p'] =='list_rotacion'){
	$titulo = 'modelo';
	$contenido = 'view/rotacion/list_rotacion.php';
}

/************ EMPLEADO ***********/
else if($_GET['p'] =='reg_empleado'){
	$titulo = 'Registro de Marca';
	$contenido = 'view/empleado/registro_empleado.php';
}
else if($_GET['p'] =='list_empleado'){
	$titulo = 'modelo';
	$contenido = 'view/empleado/lista_empleado.php';
}
else if($_GET['p'] =='reg_tipo_ingreso'){
	$titulo = 'modelo';
	$contenido = 'view/tipoingreso/reg_tipoingreso.php';
}


/************ DEPARTAMENTO ***********/
else if($_GET['p'] =='reg_departamento'){
	$titulo = 'Registro de departamento';
	$contenido = 'view/departamento/reg_departamento.php';
}

else if($_GET['p'] =='salir'){
	
	include('core/controller/salirController.php');

}

else{
	$titulo = 'ERROR 404';
	$contenido = 'html/error/error404.html';
}


 ?>
