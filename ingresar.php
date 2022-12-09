<?php 

    // uso: http://localhost:84/codoacodofinal/ingresar.php

    require_once 'incluidos/inicio.php' ;

    $tituloPagina = 'Conferencia Buenos Aires - Ingreso de Administrador de la lista' ;

    include 'incluidos/header.php' ; 

    ?>

<br>
    <div class="container-fluid text-center col-xl-5 col-lg-6 col-md-8 col-sm-10 col-xs-10" >
    <form class="row g-3" id="admin" action="incluidos/ingresar.php" method="POST">

        <div class="mb-3">
          <input type="email" class="form-control" name="ingresoEmail" id="ingresoEmail" placeholder="Email" maxlength="40" aria-label="Email"  >
        </div>

        <div class="mb-3">
          <input type="password" class="form-control" name="ingresoPass" id="ingresoPass" placeholder="Password" maxlength="40" aria-label="Password"  >
        </div>

        <div class="d-grid gap-2">
            <button class="btn btn-primary botonEnviar" type="submit" id="btnGuardar" name="submit" >Enviar</button>
        </div>

    </form>   
    </div> 
<!-- si hay valores de error en $_SESSION, acá es donde se van a usar -->  

<?php
    // include 'incluidos/footer.php' ; 