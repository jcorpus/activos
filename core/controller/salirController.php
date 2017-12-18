<?php
session_start();
unset($_SESSION['app_id']);
//session_destroy();
//header('location: http://localhost/pro_activo2/index.php');
//http://www.baluart.net/articulo/urls-amigables-con-php

session_destroy();
header('location: ../../index.php');


 ?>
