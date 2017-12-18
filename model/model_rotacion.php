<?php

class Rotacion {
    private $db;
    public function __construct(){
    require_once('../core/models/model_conexion.php');
    $this->db = new Conexion();
  }



function listar_rotacion(){
  $sql = "SELECT rt.id_rot,rt.descripcion,rt.estado,ac.descripcion as activonombre,dp.descripcion as departamentonombre FROM rotacion rt INNER JOIN activo2 ac ON rt.id_act = ac.id_act INNER JOIN departamento dp ON rt.id_depa = dp.id_depa";
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



function cbo_departamento(){
  $sql = "SELECT  id_depa,descripcion FROM departamento";
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

function buscar_activo(){
  $sql = "SELECT ac.id_act,ac.descripcion,ac.id_depa,dp.descripcion FROM activo2 ac INNER JOIN departamento dp ON ac.id_depa = dp.id_depa";
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



  function registrar_rotacion($id_activo,$nombre_rotacion,$destino_departamento,$estado){
    
   $consulta = "INSERT INTO rotacion(descripcion,estado,id_act,id_depa) VALUES('$nombre_rotacion','$estado',$id_activo,$destino_departamento)";
    $verificar = $this->db->query("SELECT rotacion.descripcion FROM rotacion WHERE rotacion.descripcion = '$nombre_rotacion'");

    if($this->db->rows($verificar) == 0){

      if ($this->db->query($consulta)) {
        
            echo '<div class="alert alert-success alert-dismissible" id="correcto">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <i class="icon fa fa-check"></i>&nbsp;Rotacion registrada correctamente.
              </div>';  
        }else{
          return false;
        $this->db->liberar($consulta);
        $this->db->close();
        }
      
    }else{

      $rotacion_ = $this->db->recorrer($verificar)[0];
      if(strtolower($nombre_rotacion) == strtolower($rotacion_)){
        echo '<div class="alert alert-warning alert-dismissible" id="correcto">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <i class="icon fa fa-times"></i>&nbsp;La rotacion ya está registrada.
          </div>';
      }
    $this->db->liberar($verificar);
    $this->db->close();
    }


  }


}

/*
$instancia = new Rotacion();
if ($instancia->registrar_rotacion(3,'nombreee',2,'A')) {
  echo "correcto";

}else{
  echo "error";
}

*/









 ?>
