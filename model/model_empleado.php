<?php

class Empleado {
    private $db;
    public function __construct(){
    require_once('../core/models/model_conexion.php');
    $this->db = new Conexion();
  }


function modificar_marca($id_marca2,$descripcion2,$estado2){
$sql = "UPDATE marca SET marca.id_mar = '$id_marca2',marca.descripcion = '$descripcion2', marca.estado = '$estado2' WHERE marca.id_mar = '$id_marca2'";
  
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


function listar_empleados(){
  $sql = "SELECT e.id_emp,e.cedula,p.nombres,p.ape_pat,p.fec_nac,p.dni,p.direccion,p.email, e.estado FROM empleado e INNER JOIN persona p ON e.id_per = p.id_per";
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



  function registrar_marca($descripcion,$estado){
    $consulta = "INSERT INTO marca(descripcion,estado) VALUES('$descripcion','$estado')";
    $verificar = $this->db->query("SELECT marca.descripcion FROM marca WHERE marca.descripcion = '$descripcion'");

    if($this->db->rows($verificar) == 0){

      if ($this->db->query($consulta)) {
        
            echo '<div class="alert alert-success alert-dismissible" id="correcto">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <i class="icon fa fa-check"></i>&nbsp;Marca registrada correctamente.
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
          <i class="icon fa fa-times"></i>&nbsp;La marca ya está registrada.
          </div>';
      }
    $this->db->liberar($verificar);
    $this->db->close();
    }



  }




















}












 ?>
