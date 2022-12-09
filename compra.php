<?php 

  $tituloPagina = 'Conferencia Buenos Aires - Compra de tickets' ;

  include 'incluidos/header.php' ; 
?>

    <br>
    <A NAME="compra"></A>

    <!-- Cards con niveles de descuento -->
    <div class="container-fluid text-center col-xl-6 col-lg-8 col-md-8 col-sm-10 col-xs-10">
        <!--Card 1-->
        <div class="card-group"> <!-- style="width: 46rem;"> -->  
            <div class="card border border-primary text-center mx-1">
                <div class="card-body">
                    <p class="card-text h4">Estudiante</p>
                    <p class="card-text">Tiene un descuento</p>
                    <p class="card-text"> <strong>80%</strong></p>
                    <p class="card-text text-muted"> <small> *presentar documentación</small></p>
                </div>
            </div>
            <!--Card 2-->
            <div class="card border border-success text-center mx-1" >
                <div class="card-body">
                    <p class="card-text h4">Trainee</p>
                    <p class="card-text">Tiene un descuento</p>
                    <p class="card-text"> <strong>50%</strong></p>
                    <p class="card-text text-muted"><small> *presentar documentación</small></p>
                </div>
            </div>
            <!--Card 3-->
            <div class="card border border-warning text-center mx-1" >
                <div class="card-body">
                    <p class="card-text h4">Junior</p>
                    <p class="card-text">Tiene un descuento</p>
                    <p class="card-text"> <strong>15%</strong></p>
                    <p class="card-text text-muted"><small> *presentar documentación</small></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Cards de descuentos -->
    <br>

    <div class="container-fluid text-center col-xl-6 col-lg-8 col-md-8 col-sm-10 col-xs-10" >

        <p class="pt-2 mb-0">Venta</p>
        <p class="h1">VALOR DE TICKET $200</p>

        <form class="row g-3" id="compraEntradas">
          
        <div class="col-md-6">
            <input type="text" class="form-control" id="ingresoNombre" placeholder="Nombre"  aria-label="Nombre" >
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" id="ingresoApellido" placeholder="Apellido"  aria-label="Apellido">
        </div>

        <div class="col-12">
            <input type="email" class="form-control" id="ingresoEmail" placeholder="Email" aria-label="Email">
        </div>
          
        <div class="col-md-6 ">
            <label for="ingresoCantidad" class="form-label " >Cantidad</label>
            <input type="number" min="1" step="1" class="form-control" id="ingresoCantidad" placeholder="Cantidad de tickets">
        </div>
        <div class="col-md-6 ">
            <label for="ingresoCategoria" class="form-label">Categoría</label>
            <select id="ingresoCategoria" class="form-select" >
                <option value="General" selected>General</option>
                <option value="Estudiante">Estudiante</option>
                <option value="Trainee">Trainee</option>
                <option value="Junior">Junior</option>
            </select>
        </div>
        <div class="alert alert-primary" >
            <p class="mb-0 aligned_left" id="importeTotal">Total a Pagar: $</p>
        </div>
          
        <div class="col">
            <button class="btn btn-success col-sm-12  botonEnviar" type="button" id="btnBorrar" >Borrar</button>
        </div>
        <div class="col">
            <button class="btn btn-success col-sm-12 botonEnviar" type="button" id="btnResumen" >Resumen</button>
        </div>
       
        </form>

        <div class="mt-2">
            <p id="mensajeNombre" class="form-text aligned_left text-danger"></p>
            <p id="mensajeApellido" class="form-text aligned_left text-danger"></p>
            <p id="mensajeEmail" class="form-text aligned_left text-danger"></p>
            <p id="mensajeCantidad" class="form-text aligned_left text-danger"></p>
        </div>
    </div>

    
    <?php 
  include 'incluidos/footer.php' ; 