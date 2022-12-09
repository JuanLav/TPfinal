<?php
    session_start();  // para manejo de sesiones y compartir algunas variables entre páginas
/* 
    cargo todas las configuraciones y clases antes de empezar. Tendré que cargar este archivo al comienzo 
    de cada página para que todas las variables y clases estén disponibles
*/
    require_once 'incluidos/config.php' ;
    require_once 'incluidos/conexion.class.php' ;
    require_once 'incluidos/crud.class.php' ;