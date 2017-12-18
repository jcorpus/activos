<?php


require('core/models/model_conexion.php');
require('core/bin/funciones/get_users.php');
##require('activo/core/bin/funciones/usuario_rol.php');
$usuarios = ver_usuarios();

$estado_user = $usuarios[$_SESSION['app_id']]['usu_estado'];
$usuario_id_v = $usuarios[$_SESSION['app_id']]['usu_id'];

##$verificar_rol = verificar_rol($usuario_id_v);
//print_r($verificar_rol);
//echo "primer valor array: ".$verificar_rol[5];
#$rol_admin = $verificar_rol[1];
//echo "rol admin ".$rol_admin;
echo "el estado es: ".$estado_user;

  if(isset($_SESSION['app_id'])){ //si no esta definida la variable session, el usuario no esta definido
    if($estado_user == 'A'){
          require 'core/sitemap_admin.php';
          require 'html/admin/topnav.php';
          require 'html/admin/header.php';
          require $contenido;
          require 'html/admin/footer.php';
    }else{

        unset($_SESSION['app_id']);
        header('Location: index.php');
    }
    
  }else {

        header('Location: index.php');
      //echo '<script> window.location="index.php"; </script>';

  }


//if ($_SESSION['app_id'] && $tipo_user == "Administrador") {






 ?>