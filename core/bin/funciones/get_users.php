<?php
function ver_usuarios(){
  $db = new Conexion();
  //$sql = $db->query("SELECT * FROM usuarios");
  //$sql = $db->query("SELECT* FROM usuarios inner join persona on persona.id_persona = usuarios.id_persona ");
  //$sql = $db->query("call sp_listar_usuarios()");

  
  $sql = $db->query("SELECT p.id_per,p.nombres,p.ape_pat,p.ape_mat,p.email,u.usu_id,u.usu_nombre,u.usu_clave,u.usu_estado,u.id_tip_usu,tp.descripcion as nombre_user from usuario u INNER JOIN persona p ON u.id_per = p.id_per INNER JOIN tipo_usuario tp ON u.id_tip_usu = tp.id_tip_usu");
  

  if ($db->rows($sql) > 0) {
    while($d = $db->recorrer($sql)){
      $usuarios[$d['usu_id']] = array(
        'id_per' => $d['id_per'],
        'nombres' => $d['nombres'],
        'ape_pat' => $d['ape_pat'],
        'ape_mat' => $d['ape_mat'],       
        'email' =>$d['email'],
        'usu_nombre' =>$d['usu_nombre'],
        'usu_id' =>$d['usu_id'],
        'usu_estado' =>$d['usu_estado'],
        'id_tip_usu' =>$d['id_tip_usu'],
        'nombre_user' =>$d['nombre_user'],

      );
    }

    //insertando 
    //$id_obtenido = $usuarios[$_SESSION['app_id']]['perso_id'];
    //$fecha_bitacora = date('Y-m-d');
    //echo("valores: ".$id_obtenido);
    //echo "<script>alert('hola por aca'.$id_obtenido); </script>";
    //$sql2 = "INSERT INTO alm_bitacora(usu_id,bit_fechra) VALUES ('$id_obtenido','$fecha_bitacora')";  
    //$db->query($sql2);



  }else{
    $usuarios = false;

  }
  $db->liberar($sql);
  $db->close();

  return $usuarios;
}

 ?>
