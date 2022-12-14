<?php
    session_start();
    require_once 'config.php' ;
    require_once 'conexion.class.php' ;
    require_once 'ingreso.class.php' ;
    
    // si estoy acá, el administrador quiere salir de la sesión

    // debería anular la variable de sesión que identifica a (un) administrador, y regresar al index,php

    // unset ($_SESSION ['admin'] ) ; 
    session_destroy() ;

    header("location: ../index.php");
