
<?php
//$mysqli=new mysqli("localhost","root","","usu")or die ("No se encontro el servidor"); 
	
	//if(mysqli_connect_errno()){
		//7echo 'Conexion Fallida : ', mysqli_connect_error();
		//exit();
//	}

//session_start();
//error_reporting(0);
	//include 'conexion.php';
	
	
	function ambil_ip() {
	foreach (array('HTTP_CLIENT_IP', 'HTTP_X_REAL_IP', 'REMOTE_ADDR', 'HTTP_FORWARDED_FOR', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED') as $key) {
	if (array_key_exists($key, $_SERVER) === true) {
	foreach (explode(',', $_SERVER[$key]) as $ip) {
    if (filter_var($ip, FILTER_VALIDATE_IP) !== false) {
      return $ip;
		    }
		  }
		}
		}
}


if($_SERVER["HTTP_X_FORWARDED_FOR"]){
	if($pos=strpos($_SERVER["HTTP_X_FORWARDED_FOR"]," "))
	{
		echo "IP local: ".substr($_SERVER["HTTP_X_FORWARDED_FOR"],0,$pos)." - IP Pública: ".substr($_SERVER["HTTP_X_FORWARDED_FOR"],$pos+1);
		$hostlocal=substr($_SERVER["HTTP_X_FORWARDED_FOR"],$pos+1);
	}else{
		echo "IP Pública: ".$_SERVER["HTTP_X_FORWARDED_FOR"];
		$hostlocal=$_SERVER["HTTP_X_FORWARDED_FOR"];
	}
	if($_SERVER["REMOTE_ADDR"])
		echo " - Proxy: ".$_SERVER["REMOTE_ADDR"];
}else{
	echo "IP Pública: ".$_SERVER["REMOTE_ADDR"];
	$hostlocal=$_SERVER["REMOTE_ADDR"];
	if($hostlocal!=$_SERVER["REMOTE_ADDR"])
		echo " - Hostname: ".$hostlocal;
}
$hostname=gethostbyaddr($hostlocal);


function ObtenerIP()
    {
       $ip = "";
       if(isset($_SERVER))
       {
           if (!empty($_SERVER['HTTP_CLIENT_IP'])) 
           {
               $ip=$_SERVER['HTTP_CLIENT_IP'];
            }
            elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            {
                $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
            }
            else
            {
                $ip=$_SERVER['REMOTE_ADDR'];
            }
       }
       else
       {
            if ( getenv( 'HTTP_CLIENT_IP' ) )
            {
                $ip = getenv( 'HTTP_CLIENT_IP' );
            }
            elseif( getenv( 'HTTP_X_FORWARDED_FOR' ) )
            {
                $ip = getenv( 'HTTP_X_FORWARDED_FOR' );
            }
            else
            {
                $ip = getenv( 'REMOTE_ADDR' );
            }
       }  
        // En algunos casos muy raros la ip es devuelta repetida dos veces separada por coma 
       if(strstr($ip,','))
       {
            $ip = array_shift(explode(',',$ip));
       }
       return $ip;
    }

$ip2 = ObtenerIP();
$ip = ambil_ip();
$date1=date("Y/m/d H:i:s"); 

	
	
	/*
	
	
	$fecha=date('Y-m-d');
	if(isset($_POST['entrar'])){
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	$log=mysqli_query($mysqli,"SELECT * FROM seg_usuario WHERE usu_nom='$usuario'");
	$tipo=mysqli_query($mysqli,"SELECT seg_usuario.usu_id, rol_id, seg_usuario.usu_pass FROM seg_usu_rol , seg_usuario WHERE seg_usu_rol.usu_id = seg_usuario.usu_id AND seg_usuario.usu_nom='$usuario'");
	$permiso=mysqli_query($mysqli,"SELECT permi_id,seg_usuario.usu_id, permi_feinicon,permi_ffincon,permi_est FROM seg_permiso , seg_usuario WHERE seg_permiso.usu_id = seg_usuario.usu_id AND seg_usuario.usu_nom='$usuario'AND permi_ffincon>='$fecha'");
	$f2=mysqli_fetch_assoc($tipo);
	$f3=mysqli_fetch_assoc($permiso);
		
	
	
	
	$fechafin = $f3['permi_ffincon'];
	$fechaini = $f3['permi_feinicon'];
	
	//$permiso= mysqli_query($mysqli,$sql);
	//$f3=mysqli_fetch_row($permiso);
	//$permisofin=$f3['permi_ffincon'];
	//$permisoini=$f3['permi_feinicom'];
	
	
	if($f=mysqli_fetch_assoc($log)){
		$_SESSION['usu_nom']=$f['usu_nom'];
		if($password==$f['usu_pass']){
			if($f['usu_est']==1){
				$k=mysqli_query($mysqli,"UPDATE `seg_bitacora` INNER JOIN `seg_usuario` ON (`seg_bitacora`.`usu_id` = `seg_usuario`.`usu_id`)SET seg_bitacora.bita_ip='$ip' where seg_usuario.usu_nom='$usuario'");						
				$k=mysqli_query($mysqli,"UPDATE `seg_bitacora` INNER JOIN `seg_usuario` ON (`seg_bitacora`.`usu_id` = `seg_usuario`.`usu_id`)SET seg_bitacora.bita_fechhora='$date1' where seg_usuario.usu_nom='$usuario'");								
				if($fechafin >= $fecha AND $fechaini <= $fecha){
						if($f2['rol_id']==1){
	
						header("Location: form.php");
						
						}else{
						echo '<script>alert("NO ES ADMINISTRADOR")</script> ';	
						header("Location: index.php");
	
						}		
						
				}else{
						echo '<script>alert("Fecha de contrato caducada")</script> ';
						echo "<script>location.href='loginn.php'</script>";
						
				}
			
			}else{
				echo '<script>alert("USUARIO INACTIVO")</script> ';
				echo "<script>location.href='loginn.php'</script>";
			}
			

		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='loginn.php'</script>";
		}
	





	
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='loginn.php'</script>";

	}
	}
	



	*/
?>