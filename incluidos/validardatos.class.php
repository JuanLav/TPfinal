<?php 

class ValidarDatos {
        
    public function validarEmail ( $mail ) {
        $mail = trim ( $mail ) ; // elimino los espacios extra
        $mail = substr ( $mail , 0 , 40 ) ; // límite para largo de string en base de datos para emails. Si se pasa, debe ingresar otro mail más corto
        $mail = filter_var( $mail  , FILTER_VALIDATE_EMAIL ) ; // y finalmente, confirmo que efectivamente sea un mail
        return $mail ;  // retorna el mail sin espacios extras, o FALSE [si no es un mail válido]
    }

    public function validarTextos( $texto , $long = 40 ) {  // para todos los textos: apellido, nombre y título de la charla [que admite más largo de cadena = 255]
        $texto = trim ( $texto ) ; // elimino los espacios extra
        $texto = substr ( $texto , 0 , $long ) ; // límite para largo de string [nombre, apellido, título] en base de datos
        $texto = filter_var( trim ( $texto ) , FILTER_SANITIZE_STRING ) ; // precaución para evitar inyección SQL
        if ( strlen ($texto ) < 5 ) {
            $texto = false ;
        } 
        return $texto ; // devuelve la cadena que corresponde, o false en el caso de cadena no válida [corta]
    }
}