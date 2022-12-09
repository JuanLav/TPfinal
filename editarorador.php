<?php 

    // uso: http://localhost:84/codoacodofinal/editarorador.php?id=1

    require_once 'incluidos/inicio.php' ;

    if (! $_SESSION ['admin'] ) {  // si es false, no es administrador. Lo derivo a index.php
        header("location: index.php" ); // 
    }; 

          $tituloPagina = 'Conferencia Buenos Aires - Editar orador' ;

    $id = $_GET ['id'] ; 

    $titulosFormulario = '      <p class="pt-2 mb-0">Editar</p> ' ;
    $titulosFormulario .= '      <p class="h1">ORADOR</p> ' ;
    $titulosFormulario .= '      <p>El Administrador tiene autorización para <u>editar al orador</u>.</p>'  ;

    // valores iniciales (antes de modificarse), de la base de datos

    $conexion = new crud () ;
    $datos = $conexion->read ( $id ) ;

    if ($datos == NULL ) {
        header("location: listainscripcion.php?error=idnovalida");
        exit(); // si se ingresa manualmente en la línea de navegación una id o un dato no válido, y no se encuentra nada,
        // regresa a la lista de inscripción.
    }

    $valorNombre = $datos[0]['nombre'] ;
    $valorApellido = $datos[0]['apellido'] ;
    $valorMail = $datos[0]['mail'] ;
    $valorTema = $datos[0]['tema'] ;

    include 'incluidos/header.php' ; 

    include 'incluidos/formulariooradores.php' ;
    include 'incluidos/footer.php' ; 