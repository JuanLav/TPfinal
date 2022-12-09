<?php
    session_start();
    require_once 'config.php' ;
    require_once 'conexion.class.php' ;
    require_once 'ingreso.class.php' ;
    require_once 'validardatos.class.php' ;
    
    // si estoy acá, el supuesto administrador completo el mail y la password en el formulario presente en ingresar.php

    // deberían ingresar datos [mail, password] por POST, además del botón submit

    $validacion = new ValidarDatos () ; // depuro los datos, para minimizar los riesgos de inyección de SQL

    if(isset($_POST["submit"])) { // si estoy acá, se apretó el botón submit de la página ingresar.php
        $mail = $validacion->validarTextos( $_POST['ingresoEmail']) ; 
        $pass = $validacion->validarTextos( $_POST['ingresoPass'] , 255 ) ; 
    } else { // pero si no, el intento de ingreso no es válido. Lo mando a index.php
        header("location: ../index.php?");
        exit(); // .
    }

    // si estoy acá, el usuario ingresó (o no) un mail y una password

    $ingreso = new ingreso () ;

    $adminId = $ingreso->buscar ( $mail ) ; // busco si el mail está en la lista de oradores. Si obtengo algo !=, es el número de admin_id

    if ( ! $adminId ) { // si no encuentro el mail, alguien que no está autorizado quiere entrar. Lo mando a index.php
        header("location: ../index.php?");
        exit(); // 
    } 

    // si estoy acá, se encontró el mail, ahora verifico si la password es correcta:
        
    $passGuardada = $ingreso->pass ( $adminId  ) ; // obtengo la pass guardada en la base [tabla admin]   

    if ( $passGuardada != $pass ) { // si NO coincide la pass ingresada con la guardada. Lo mando a ingresar.php
        header("location: ../ingresar.php?error=malapasswrod");
        exit(); // 
    } 

    // si estoy acá, las credenciales del administrador se verificaron

    $_SESSION ['admin'] = true ; 

    header("location: ../listainscripcion.php");
