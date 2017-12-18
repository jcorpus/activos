<?php
require('core/models/model_conexion.php');
require('core/bin/funciones/get_users.php');
require('core/bin/funciones/usuario_rol.php');
$usuarios = ver_usuarios();
//$categoria_tesis = listar_categoria();
$estado_user = $usuarios[$_SESSION['app_id']]['usu_est'];
$permiso_user = $usuarios[$_SESSION['app_id']]['permi_est'];
$usuario_id_v = $usuarios[$_SESSION['app_id']]['usu_id'];
//print_r("el permiso es: ".$permiso_user);
$verificar_rol = verificar_rol($usuario_id_v);

$rol_nombre = $verificar_rol[6];

if ($_SESSION['app_id'] && $estado_user == 1 && $permiso_user == 1) {
  	if ($rol_nombre == 'ADMINISTRADOR' || $rol_nombre =='ALMACENERO' || $rol_nombre == 'JEFE ALMACEN')  {
  		# code...
	  
	  require 'core/sitemap_admin.php';
	  require 'html/admin/topnav.php';
	  require 'html/admin/header.php';
	  require $contenido;
	  require 'html/admin/footer.php';
  	}else{
  		
  	header('Location: ../modulos.php');
  	}
 
  
}else{
  
  header('Location: ../index.php');

}


 ?>
