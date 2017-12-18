<?php

class Tipo_ingreso {
    private $db;
    public function __construct(){
    require_once('../core/models/model_conexion.php');
    $this->db = new Conexion();
  }


function modificar_tipo($id_tipo2,$descripcion2,$estado2){
$sql = "UPDATE tipo_ingreso SET tipo_ingreso.id_tip_ing = '$id_tipo2',tipo_ingreso.descripcion = '$descripcion2', tipo_ingreso.estado = '$estado2' WHERE tipo_ingreso.id_tip_ing = '$id_tipo2'";
  
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


function listar_tipos(){
  $sql = "SELECT * , CASE tipo_ingreso.estado WHEN 'A' THEN 'activo' WHEN 'I' THEN 'inactivo' END  estado FROM tipo_ingreso";
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



  function registrar_tipo($descripcion,$estado){
    $consulta = "INSERT INTO tipo_ingreso(descripcion,estado) VALUES('$descripcion','$estado')";
    $verificar = $this->db->query("SELECT tipo_ingreso.descripcion FROM tipo_ingreso WHERE tipo_ingreso.descripcion = '$descripcion'");

    if($this->db->rows($verificar) == 0){

      if ($this->db->query($consulta)) {
        
            echo '<div class="alert alert-success alert-dismissible" id="correcto">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <i class="icon fa fa-check"></i>&nbsp;tipo registrado correctamente.
              </div>';  
        }else{
          return false;
        $this->db->liberar($consulta);
        $this->db->close();
        }
      
    }else{

      $marca_ = $this->db->recorrer($verificar)[0];
      if(strtolower($descripcion) == strtolower($marca_)){
        echo '<div class="alert alert-warning alert-dismissible" id="correcto">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <i class="icon fa fa-times"></i>&nbsp;el tipo ya está registrada.
          </div>';
      }
    $this->db->liberar($verificar);
    $this->db->close();
    }



  }




















}












 ?>
