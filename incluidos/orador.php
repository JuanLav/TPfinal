<?php
    session_start();

    if (! $_SESSION ['admin'] ) {  // si es false, no es administrador. Lo derivo a index.php
        header("location: ../index.php" ); // 
    }; 

    require_once 'config.php' ;
    require_once 'conexion.class.php' ;
    require_once 'crud.class.php' ;
    require_once 'validardatos.class.php' ;

    $paginaDeOrigen = substr( $_SERVER['HTTP_REFERER'] , strrpos( $_SERVER['HTTP_REFERER'] , '/') + 1 ) ; // el usuario viene desde esta página 

    if (str_contains ($paginaDeOrigen , 'index.php') ) { $paginaDeOrigen = 'index.php#convertite' ; }
    
    $validacion = new ValidarDatos () ;

    if (isset ($_POST ['id'])) { 
        $id = $_POST ['id'] ; // la id del orador a editar [si es que fue pasado el dato][si no hay dato, es nuevo]
    }
    $nombre = $validacion->validarTextos( $_POST['ingresoNombre']) ; // nombre del orador para editar / guardar
    $apellido = $validacion->validarTextos( $_POST['ingresoApellido']) ; // apellido del orador para editar / guardar
    $mail = $validacion->validarTextos( $_POST['ingresoEmail']) ; // mail del orador para editar / guardar
    $tema = $validacion->validarTextos( $_POST['ingreso_texto'] , 255 ) ; // tema de su charla para editar / guardar
    // cualquiera de estos que sea FALSE, es porque tiene problemas

    if (! $nombre ) { $errores [] = 'Ingrese un nombre válido' ; } else { $_SESSION['datos']['nombre'] = $nombre ; }
    if (! $apellido ) { $errores [] = 'Ingrese un apellido válido' ; } else { $_SESSION['datos']['apellido'] = $apellido ; }
    if (! $mail ) { $errores [] = 'Ingrese un email válido' ; } else { $_SESSION['datos']['mail'] = $mail ; }
    if (! $tema ) { $errores [] = 'Ingrese un tema válido' ; } else { $_SESSION['datos']['tema'] = $tema ; }

    if ( isset ($errores) ) {  // debo regresar a la página de ingreso/edición, cargar los datos buenos para que el usuario/administrador no tenga que repetir los datos válidos, y mostrar los errores mensajes de error
        // para eso cargo los errores en el array $_SESSION; los datos válidos ya los tengo disponibles en $_SESSION 
        $_SESSION['errores'] = $errores ; 
        header("location: ../$paginaDeOrigen" ); // regreso, con los errores y los datos válidos en $_SESSION[]
        exit() ;   // de hecho, si regreso a la página de EDICIÓN, lo mejor sería dejar los valores de la base SIN cambios.
    } else {
        unset ($_SESSION['errores']) ;
        unset ($_SESSION['datos']) ; 
    }

// si estoy acá, los datos son válidos y se pueden guardar (orador nuevo o update de orador)
$conexion = new crud () ;

    if ( ! isset ( $id ) ) { // si NO tiene id, se trata de un orador nuevo
        $conexion->create ( $nombre , $apellido , $mail , $tema ) ; // se ingresó un orador nuevo, regresa al index, formulario de ingreso
        header("location: ../index.php?#convertite");
        exit(); // ya ingresé el nuevo orador; ahora tengo que ir al inicio.
    } else {  // si tiene id, se trata de la edición de un orador existente
        $datos = $conexion->read ( $id ) ; // por si acaso, verifico que el registro efectivamente existe, y no me de error por alguna razón

        if (isset ($datos)) {  // si es TRUE , el dato efectivamente existe, por lo que se podría actualizar sin problemas

            $conexion->update ( $id , $nombre , $apellido , $mail , $tema );
        }
    }
    // de acá, regreso a la lista de inscripción, ya sea con el orador NUEVO ingresado, o el EXISTENTE actualizado  
    header("location: ../listainscripcion.php?");