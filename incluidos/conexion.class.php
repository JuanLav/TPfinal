<?php

// DBH conexion // - clase para establecer la conexión a la base de datos

class conexion {

        private $dbHost   = DB_HOST ;
        private $username = DB_USER ;
        private $password = DB_PASS ;
        private $dbName   = DB_NAME ;

   protected function conectar() {
      try {

          $dbh = new PDO('mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName, $this->username, $this->password);
          $dbh->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
          return $dbh;
      }
      catch (PDOException $e) {
          print "Error!: " . $e->getMessage() . "<br>" ;
          die() ;
      }
   }
}  