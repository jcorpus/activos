<?php

if($_SERVER["HTTP_X_FORWARDED_FOR"]) {
     // El usuario navega a través de un proxy
     $ip_proxy = $_SERVER["REMOTE_ADDR"]; // ip proxy
     $ip_maquina = $_SERVER["HTTP_X_FORWARDED_FOR"]; // ip de la maquina

     echo "la ip es: ".$ip_proxy;
     echo "la ip es: ".$ip_maquina;

} else {
     $ip_maquina = $_SERVER["REMOTE_ADDR"]; // No se navega por proxy
     echo $ip_maquina;
}


 ?>


