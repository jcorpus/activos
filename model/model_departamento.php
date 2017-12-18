<?php

class Departamento {
    private $db;
    public function __construct(){
    require_once('../core/models/model_conexion.php');
    $this->db = new Conexion();
  }


function modificar_departamento($id_depa2,$descripcion2,$estado2){
$sql = "UPDATE departamento SET departamento.id_depa = '$id_depa2',departamento.descripcion = '$descripcion2', departamento.estado = '$estado2' WHERE departamento.id_depa = '$id_depa2'";
  
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


function listar_departamentos(){
  $sql = "SELECT * , CASE departamento.estado WHEN 'A' THEN 'activo' WHEN 'I' THEN 'inactivo' END  estado FROM departamento";
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



  function registrar_departamento($descripcion,$estado){
    $consulta = "INSERT INTO departamento(descripcion,estado) VALUES('$descripcion','$estado')";
    $verificar = $this->db->query("SELECT departamento.descripcion FROM departamento WHERE departamento.descripcion = '$descripcion'");
    if($this->db->rows($verificar) == 0){
      if ($this->db->query($consulta)) {
        
            echo '<div class="alert alert-success alert-dismissible" id="correcto">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <i class="icon fa fa-check"></i>&nbsp;departamento registrado correctamente.
              </div>';  
        }else{
          return false;
        $this->db->liberar($consulta);
        $this->db->close();
        }
    }else{

      $depa_ = $this->db->recorrer($verificar)[0];
      if(strtolower($descripcion) == strtolower($depa_)){
        echo '<div class="alert alert-warning alert-dismissible" id="correcto">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <i class="icon fa fa-times"></i>&nbsp;el departamento ya está registrado.
          </div>';
      }
    $this->db->liberar($verificar);
    $this->db->close();
    }
  }




















}












 ?>
