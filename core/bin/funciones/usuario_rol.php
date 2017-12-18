<?php
function verificar_rol($usuario_id_v){
  $db = new Conexion();
  //$sql = $db->query("SELECT * FROM usuarios");
  //$sql = $db->query("SELECT* FROM usuarios inner join persona on persona.id_persona = usuarios.id_persona ");
  $sql = $db->query(" SELECT alm_usurol.usu_id,alm_usurol.rol_id,alm_usurol.usrol_est, alm_usuario.usu_id, alm_usuario.usu_nom,alm_usuario.usu_email, alm_rol.rol_desc FROM alm_usurol INNER JOIN alm_usuario ON alm_usuario.usu_id = alm_usurol.usu_id INNER JOIN alm_rol ON alm_usurol.rol_id = alm_rol.rol_id WHERE alm_usuario.usu_id =  '$usuario_id_v' ");


  if ($db->rows($sql) > 0) {
  	$usuario_rol = $db->recorrer($sql);
  	foreach($usuario_rol as $tabla => $valor){
		return $usuario_rol;

	}

	/*
	
	while($usuario_rol = $db->recorrer($sql)){
		$arreglo[] = $usuario_rol;

	}
	*/

  	/*
    while($d = $db->recorrer($sql)){
      $usuario_rol[$d['usu_id']] = array(
        'usu_id' => $d['usu_id'],
        'rol_id' => $d['rol_id'],
        'usrol_est' => $d['usrol_est'],
        'usu_nom' => $d['usu_nom'],       
        'usu_email' =>$d['usu_email']
      );
    }
	*/

  }else{
    $usuario_rol = false;

  }
  $db->liberar($sql);
  $db->close();

  return $usuario_rol;
}

 ?>
