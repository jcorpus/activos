<?php

////EJEMPLO
//http://www.apoyoti.com/clase-simple-en-php-para-conexion-a-base-de-datos-mysql/

class Usuario {
    private $db;
    public function __construct(){
    require_once('../core/models/model_conexion.php');
    $this->db = new Conexion();
  }


//$this->db->rows($verificar) == 0

  function registro_user($id_persona,$usuario_nombre, $pass_encrip, $usuario_img, $fecha_registro, $estado_user,$email_usuarior){
    $verificar = $this->db->query("SELECT usuario.usu_email FROM alm_usuario usuario WHERE usu_email = '$email_usuarior' LIMIT 1");
    if ($this->db->rows($verificar) == 0) {
      $consulta = "INSERT INTO alm_usuario(perso_id,usu_nom,usu_pass,usu_email,usu_freg,usu_img,usu_est) 
        VALUES('$id_persona','$usuario_nombre','$pass_encrip','$email_usuarior',
        '$fecha_registro','$usuario_img','$estado_user')";
     
      if ($this->db->query($consulta)) {
          
          echo '<div class="alert alert-success alert-dismissible" id="correcto">
    				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    			  <i class="icon fa fa-check"></i>&nbsp;Usuario registrado correctamente
    				</div>';

        return true;
      }else{
        return false;
      }
      $this->db->liberar($verificar);
      $this->db->close();
    }else{
      $email_verificar = $this->db->recorrer($verificar)[0];
      if (strtolower($email_usuarior) == strtolower($email_verificar)) {
        echo '<div class="alert alert-warning alert-dismissible" id="correcto">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <i class="icon fa fa-times"></i>&nbsp;El usuario ya esta registrado
          </div>';
      }
    }
    $this->db->close();
  }


function listar_usuarios(){
  $sql = "SELECT u.usu_id, u.usu_nombre,u.usu_estado,p.nombres,p.ape_pat, p.ape_mat, p.email FROM usuario u INNER JOIN persona p ON u.usu_id = p.id_per";
  $consulta = $this->db->query($sql);
  $arreglo = array();
  if($this->db->rows($consulta) > 0){
    while($consulta_b =$this->db->recorrer($consulta)){
      $arreglo[] = $consulta_b;
    }

  }else{
    echo "no hay datos a mostrar";
  }

  $this->db->liberar($consulta);
  $this->db->close();
  return $arreglo;
}



function modificar_usuario_estado($id_usuario,$usu_estado){

  $sql = "UPDATE usuario SET usuario.usu_id = '$id_usuario', usuario.usu_estado = '$usu_estado' WHERE usuario.usu_id = '$id_usuario'";
  if ($this->db->query($sql)) {
    echo '<div class="alert alert-success alert-dismissible" id="correcto">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-check"></i>&nbsp;Modificado correctamente
      </div>';
  }else{
    echo '<div class="alert alert-danger alert-dismissible" id="correcto">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-times"></i>&nbsp;Ocurrio un Error
      </div>';
  }
  //$this->db->liberar($sql);  
  $this->db->close();


}
















}



 ?>
