<?php

class Activo {
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


function listar_activos(){
  $sql = "SELECT ac.id_act,ac.descripcion,ac.cantidad,ac.pre_uni,ac.fec_cre,ac.estado,ac.years,ac.porcentaje,ac.residuo, dt.id_det_mod_mar, tp.descripcion,guia.descripcion,tpi.descripcion FROM activo2 ac INNER JOIN detalle_modelo_marca dt ON ac.id_det_mod_mar = dt.id_det_mod_mar INNER JOIN tipo_activo tp ON ac.id_tip_act = tp.id_tip_act INNER JOIN gia_control_interno guia ON ac.id_guia_con_int = guia.id_gia_con_int INNER JOIN tipo_ingreso tpi ON ac.id_tip_ing = tpi.id_tip_ing";

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



  function registrar_activo($fecha,$descripcion,$cantidad,$costo,$estado,$cbo_marca,$tipo_activo,$guia_control,$tipo_ingreso,$depreciacion,$years,$Porcentaje,$residuo,$departamento){
    $consulta = "INSERT INTO activo2(descripcion,cantidad,pre_uni,fec_cre,estado,id_det_mod_mar,id_tip_act,id_guia_con_int,id_tip_ing,depreciacion,years,porcentaje,residuo,id_depa) VALUES('$descripcion','$cantidad','$costo','$fecha','$estado','$cbo_marca','$tipo_activo','$guia_control','$tipo_ingreso','$depreciacion','$years','$Porcentaje','$residuo','$departamento')";
    $verificar = $this->db->query("SELECT activo2.descripcion FROM activo2 WHERE activo2.descripcion = '$descripcion'");
    if($this->db->rows($verificar) == 0){
      if ($this->db->query($consulta)) {
            echo '<div class="alert alert-success alert-dismissible" id="correcto">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <i class="icon fa fa-check"></i>&nbsp;Activo registrada correctamente.
              </div>';  
        }else{
          return false;
        $this->db->liberar($consulta);
        $this->db->close();
        }
    }else{
      $activo_ = $this->db->recorrer($verificar)[0];
      if(strtolower($descripcion) == strtolower($activo_)){
        echo '<div class="alert alert-warning alert-dismissible" id="correcto">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <i class="icon fa fa-times"></i>&nbsp;La activo ya está registrado.
          </div>';
      }
    $this->db->liberar($verificar);
    $this->db->close();
    }
  }





function cbo_listar_marcas(){
  $sql = "SELECT  id_mar,descripcion FROM marca";
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


function cbo_tipoactivo(){
  $sql = "SELECT  id_tip_act,descripcion FROM tipo_activo";
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

function cbo_guia_control(){
  $sql = "SELECT  id_gia_con_int,descripcion FROM gia_control_interno";
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


function cbo_tipoingreso(){
  $sql = "SELECT  id_tip_ing,descripcion FROM tipo_ingreso";
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

function cbo_listar_detalle($id_marca){
  $sql = "SELECT mo.id_mod,mo.descripcion from marca m INNER JOIN detalle_modelo_marca dt ON m.id_mar = dt.id_mar INNER JOIN modelo mo ON mo.id_mod = dt.id_mod WHERE m.id_mar = $id_marca ";
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













}












 ?>
