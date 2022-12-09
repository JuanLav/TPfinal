<?php

// clase crud (Create Read Update Delete), para las diversas interacciones con la base de datos

class ingreso extends conexion {

/*
	NOTA:
	Utilizo 'prepared statements', porque aprendí que es buena práctica para 
	proteger la base ante ataques con 'SQL injection'.
	Además, sanitizo (en su paso al controlador) las entradas 
   como precaución adicional (otra buena práctica).
*/

// ****************** devuelve la lista de oradores

   public function buscar( $mail ) { // verifico, si el usuario está en la tabla de administradores

      $stmt = $this->conectar()->prepare( "SELECT * FROM admin WHERE mail = ? ;" ); 

      try {
         $stmt->execute( array ( $mail ) ) ; // acá en rigor no hacen falta 'prepared statements' porque no se usa ningún ingreso del usuario 
         $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
         $result = $result [0]['admin_id']; // 
         $stmt = null; // acá libero la memoria del statement
      } catch (Exception $e) {  // de este lado hubo un problema al conectarse con la base de datos
         $stmt = null;
//         header("location: ../index.php?error=stmtfailed"); // PENDIENTE adonde dirigirlo
//         exit();
         $e->getMessage() ; // acá estaría el mensaje de error
         $result = false ;
      }
// echo "por acá estoy " . $result . "<br>" ; 
      return $result; // si el mail es correcto, devuelvo la id de administrador respectiva
   }

   public function pass( $id ) { // lee los datos de la tabla oradores, para el id solicitado 

      $stmt = $this->conectar()->prepare( "SELECT pass FROM admin WHERE admin_id = ? ;" ); 

      try {
         $stmt->execute( array ( $id )) ; 
         $result = $stmt->fetchAll(PDO::FETCH_ASSOC); // sería una sola fila
         $result = $result [0]['pass']; //
      } catch (Exception $e) {
         $stmt = null;
         $e->getMessage() ; // acá estaría el mensaje de error
         $result = false ;
      }
      return $result; // si todo está bien, acá tengo la password correspondiente al id
   }
   
}  