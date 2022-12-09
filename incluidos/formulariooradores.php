    <!-- Formulario para ingreso/edición de orador -->
    <div class="container-fluid text-center col-xl-5 col-lg-6 col-md-8 col-sm-10 col-xs-10" >
    <form class="row g-3" id="orador" action="incluidos/orador.php" method="POST">

    <!--     <form class="row g-3" id="orador"> -->

<?php
    // personalizando el texto del formulario de Orador, según si es para agregarse o para editarlo:
    /* agregarse: 
      <p class="pt-2 mb-0">CONVERTITE EN UN</p><A NAME="convertite"></A>
      <p class="h1">ORADOR</p>
      <p>Anotate como orador para dar una <u>charla ignite</u>. Contanos de qué querés hablar!</p>
    */
    echo $titulosFormulario ;
?>
      <div class="row g-2">
        <div class="col-md">
          <div class="mb-3">
            <input type="text" class="form-control" name="ingresoNombre" id="ingresoNombre" placeholder="Nombre" maxlength="40" value="<?php echo $valorNombre ; ?>" />
          </div>
        </div>
        <div class="col-md">
          <div class="mb-3">
            <input type="text" class="form-control" name="ingresoApellido" id="ingresoApellido" placeholder="Apellido" maxlength="40" value="<?php echo $valorApellido ; ?>" />
          </div>
        </div>
      </div>

      <div class="mb-3">
          <input type="email" class="form-control" name="ingresoEmail" id="ingresoEmail" placeholder="Email" maxlength="40" aria-label="Email" value="<?php echo $valorMail ; ?>" >
      </div>

      <?php if (isset ( $id )) { echo '<input type="text" name="id" value="' . $id . '" ; } hidden >' ; } ?>

      <div class="mb-3">
        <textarea class="form-control" name="ingreso_texto" id="ingreso_texto" rows="3" placeholder="Sobre qué querés hablar?" rows="6" maxlength="250"><?php if ( $valorTema != '')  { echo $valorTema ; } ?></textarea>
        <p class="form-text aligned_left">Recordá incluir un título para tu charla</p>
      </div>
      <div class="d-grid gap-2">
        <button class="btn btn-primary botonEnviar" type="submit" id="btnGuardar" name="submit" >Enviar</button>
      </div>

    </form>    
<!-- si hay valores de error en $_SESSION, acá es donde se van a usar -->  
        <div class="mt-2">
          <?php if (isset ($_SESSION['errores'])) {  
             foreach ($_SESSION['errores'] as $error ) { 
              echo '<p id="mensajeNombre" class="form-text aligned_left text-danger">' . $error . ' </p> ' ; 
            } 
          } // una vez que ya mostré los mensajes de error [si hay], libero la array $_SESSION['errores']
          unset ($_SESSION['errores']) ; ?>
        </div>
    </div>