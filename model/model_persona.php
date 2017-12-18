<?php

class Persona{
  private $db;
  public function __construct(){
  require_once('../core/models/model_conexion.php');
  $this->db = new Conexion();
}



//trim($valor) == ''
function listar_persona($valor){
 try {
      if (strlen($valor) <= 0) {

      echo "falta DNI";
      throw new Exception('FALTA EL DNI');
       return 0;
  }
  else{
/*
  $sql = "SELECT persona.perso_id, persona.perso_nom, persona.perso_app,persona.perso_apm ,dato_pe.dtpe_id,dato_pe.perso_id, dato_pe.tpdt_id, alm_tipodato.tpdt_des, dato_pe.dtpe_desc FROM alm_dato_persona dato_pe INNER JOIN alm_persona persona ON dato_pe.perso_id = persona.perso_id INNER JOIN alm_tipodato ON dato_pe.tpdt_id = alm_tipodato.tpdt_id WHERE alm_tipodato.tpdt_id = 1 AND dato_pe.dtpe_desc LIKE '%".$valor."%' LIMIT 1 " ;
*/
  $sql = "CALL buscar_persona($valor)" ;

  }
   
  
  $resultado = $this->db->query($sql);
  
  /*
  if ($this->db->rows($resultado) > 0) {
    echo "datos ";
  }

*/
  $arreglo = array();
  while($re =$this->db->recorrer($resultado)){ ///MYSQL_BOTH, MYSQL_ASSOC, MYSQL_NUM
    $arreglo[] = $re;
  }
  return $arreglo;
  $this->db->liberar($sql);
  $this->db->close();
    }
    catch(Exception $e) {
      echo $e->getMessage();
    }


  

}









}



$instancia = new Persona();
$resp = $instancia->listar_persona('hhkjk');
print_r($resp);

/*
$mod_alumno = new Alumno();
if ($mod_alumno->modificar_alumno('16','mod','mod','mod','66666666','address','666666','666@gmail.com','99999','66666.png')) {
  echo "correcto";
}else{
  echo "error";
}
*/



/*
echo '<div class="alert alert-danger alert-dismissible" id="correcto">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <i class="icon fa fa-times"></i>&nbsp;Ocurrio un Error
    </div>';
*/







/*
$instancia = new Alumno();
if ($instancia->registro_alumno('j3o@45gmail.com','45456756','2015/12/12','julioo','corpus','mechato','ppaoo','346456','23','M','passwordd')) {
  echo "registro correcto";
}else{
  echo "ocurrio un error";
}


*/
 ?>
