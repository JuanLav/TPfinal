<?php 

    require_once 'incluidos/inicio.php' ;
    
// verifico si es administrado [si tiene los privilegios necesarios para estar acá]

    if (! $_SESSION ['admin'] ) {  // si es false, no es administrador. Lo derivo a index.php
      header("location: index.php" ); // 
    }; 

    $tituloPagina = 'Conferencia Buenos Aires - Lista de oradores inscriptos' ;

    $conexion = new crud () ;
    $datos = $conexion->readAll () ; // acá obtengo los datos de todos los oradores

    include 'incluidos/header.php' ; 
?>
    <!-- Conoce a los oradores y Cards -->

    <br>
    <div class="container-fluid text-left px-5" style="width: 95%">
    <A NAME="oradores"></A>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Orador</th>
          <th scope="col">Tema</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>

<?php 

    foreach ( $datos as $linea ) { ?>

      <tr>
        <th scope="row"><?php echo $linea["nombre"] . " " . $linea["apellido"] ; ?>
        <br><small><?php echo $linea["mail"] ?></small>
        </th>
        <td><?php echo $linea["tema"] ?></td>
        <td><a href="editarorador.php?id=<?php echo $linea["id"] ?>" class="btn btn-success text_bottom me-4">Editar</a></td>        
        <td><a href="incluidos/delete.php?id=<?php echo $linea["id"] ?>" class="btn btn-danger text_bottom me-4">Eliminar</a></td> 
      </tr>

<?php } ?>

</tbody>
</table>

</div>

<?php 
// acá irá la lista de oradores.

    include 'incluidos/footer.php' ; 