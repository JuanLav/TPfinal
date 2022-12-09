    <!-- Menú en pie de página -->
    <footer class="container-fluid text-white pt-4 menu">
      <div class="container-fluid text-center">
        <div class="row">
          <div class="col">
            <p><small>Preguntas frecuentes</small></p>
          </div>
          <div class="col">
            <p><small>Contactanos</small></p>
          </div>
          <div class="col">
            <p><small>Prensa</small></p>
          </div>
          <div class="col">
            <p><small>Privacidad</small></p>
          </div>
          <div class="col">
            <?php
              if (! isset ($_SESSION ['admin'] )) {  // si es false, no es administrador.
                echo '<p><small><a href="ingresar.php">Ingresar</a></small></p>' ; 
              } else {  // si es true, es administrador, entonces lo derivo a la página listainscripcion.php
                echo '<p><small><a href="listainscripcion.php">Uso Interno</a></small></p>' ; 
              } 
            ?>
          </div>

          <?php // si estoy ingresado, debería tener la posibilidad de cerrar sesión. 
                // envío al link de cierre de sesión
            if (isset ($_SESSION ['admin'] )) {
                 echo '          <div class="col"> ' ;
                 echo '             <p><small><a href="incluidos/salir.php">Cerrar sesión</a></small></p>' ; 
                 echo '          </div>' ; 
            } //  
          ?>
        </div>
      </div>
    </footer>
    
    <!-- scripts default -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>

</body>
</html>