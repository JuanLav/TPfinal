<?php
    session_start();

    if (! $_SESSION ['admin'] ) {  // si es false, no es administrador. Lo derivo a index.php
        header("location: ../index.php" ); // 
    }; 

    require_once 'config.php' ;
    require_once 'conexion.class.php' ;
    require_once 'crud.class.php' ;

    $id = $_GET ['id'] ; // la id del orador a eliminar

    $conexion = new crud () ;
    // por si acaso, verifico que el registro efectivamente existe, y no me de error por alguna razón

    $datos = $conexion->read ( $id ) ;

    if ($datos == NULL ) {
        header("location: ../listainscripcion.php?error=idnovalida");
        exit(); // si se ingresa manualmente en la línea de navegación una id o un dato no válido, y no se encuentra nada,
        // regresa a la lista de inscripción.
    }

    // si estoy acá, el dato efectivamente existe, por lo que se podría borrar sin problemas

    $conexion->delete ($id) ;

    header("location: ../listainscripcion.php?error=eliminado");
    exit() ; // regreso y mostrará la lista actualizada sin el registro eliminado