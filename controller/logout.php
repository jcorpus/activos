<?php
session_start();
if(session_destroy()){
    // header("Location: ../login_agro.php")
    $mensaje = "Saliendo del sistema";
    echo "<script type='text/javascript'>alert('$mensaje');</script>";
    header( "refresh:0.2;url=login.php" );
}

?>