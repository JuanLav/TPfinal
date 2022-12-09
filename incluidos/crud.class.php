<?php

// clase crud (Create Read Update Delete), para las diversas interacciones con la base de datos

class crud extends conexion {

/*
	NOTA:
	Utilizo 'prepared statements', porque aprendí que es buena práctica para 
	proteger la base ante ataques con 'SQL injection'.
	Además, sanitizo (en su paso al controlador) las entradas 
   como precaución adicional (otra buena práctica).
*/

// ****************** devuelve la lista de oradores

   public function readAll( ) { // lee la tabla completa de oradores

      $stmt = $this->conectar()->prepare( "SELECT * FROM oradores ;" ); 

      try {
         $stmt->execute( ) ; // acá en rigor no hacen falta 'prepared statements' porque no se usa ningún ingreso del usuario 
         $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
         $stmt = null; // acá libero la memoria del statement
      } catch (Exception $e) {  // de este lado hubo un problema al conectarse con la base de datos
         $stmt = null;
//         header("location: ../index.php?error=stmtfailed"); // PENDIENTE adonde dirigirlo
//         exit();
         $e->getMessage() ; // acá estaría el mensaje de error
         $result = false ;
      }
// echo "por acá estoy " . $result . "<br>" ; 
      return $result; // si todo está bien, acá tengo la tabla completa de oradores
   }

   public function read( $id ) { // lee los datos de la tabla oradores, para el id solicitado 

      $stmt = $this->conectar()->prepare( "SELECT * FROM oradores WHERE id = ? ;" ); 

      try {
         $stmt->execute( array ( $id )) ; 
         $result = $stmt->fetchAll(PDO::FETCH_ASSOC); // sería una sola fila
         $stmt = null;
      } catch (Exception $e) {
         $stmt = null;
         $e->getMessage() ; // acá estaría el mensaje de error
         $result = false ;
      }
      return $result; // si todo está bien, acá tengo la fila correspondiente al id
   }

   // INSERT INTO `oradores` (`id`, `nombre`, `apellido`, `mail`, `tema`, `date_created`) VALUES (NULL, 'Juan', 'Bach', 'juan.bach@gmail.com', 'PHP, preapred statements y su uso para evitar la inyección SQL', current_timestamp());
   public function create ( $nombre , $apellido, $mail , $tema ) {  // 
      $stmt = $this->conectar()->prepare("INSERT INTO oradores ( nombre, apellido, mail, tema ) VALUES ( ?, ?, ?, ?);" );

      try {
         $stmt->execute( array ( $nombre , $apellido, $mail , $tema )) ; 
         $stmt = null;
         $result = true ;   // acá estaría agregado el registro en la base de datos
      } catch (Exception $e) {
         $stmt = null ;
         header("location: ../index.php#oradores?error=stmtfailed"); // Algo falló
         exit();
      }
      return $result; // en realidad, no hace falta devolver nada.
   }

   public function update ( $id, $nombre , $apellido, $mail , $tema ) {  // 

      $stmt = $this->conectar()->prepare( 'UPDATE oradores SET nombre = ? , apellido = ? , mail = ? , tema = ? WHERE id = ?;'  );

      try {
         $stmt->execute( array ( $nombre , $apellido, $mail , $tema , $id )) ; 
         $stmt = null;
         $result = true ;   // acá estaría agregado el registro en la base de datos
      } catch (Exception $e) {
         $stmt = null ;
         header("location: ../editarorador.php?error=stmtfailed"); // Algo falló
         exit();
      }
      return $result; // en realidad, no hace falta devolver nada.
   }

   public function delete ( $id ) {  // borrar el registro

      $stmt = $this->conectar()->prepare( 'DELETE FROM oradores WHERE id = ? ;'  );

      try {
         $stmt->execute( array ( $id )) ; 
         $stmt = null;
         $result = true ;   // acá estaría borrador el registro id de la base de datos
      } catch (Exception $e) {
         $stmt = null ;
         header("location: ../listainscripcion.php?error=stmtfailed"); // Algo falló
         exit();
      }
      return $result; // en realidad, no hace falta devolver nada.
   }

}  