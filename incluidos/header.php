<!DOCTYPE html>
<html lang="en">
<!-- Ejercicio integrador comisión 22585 Curso Full Stack PHP - Juan Lavric 2022-09-20 -->
<!-- Ejercicio integrador javascript comisión 22585 Curso Full Stack PHP - Juan Lavric 2022-10-22 -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat" rel="stylesheet">
    
    <!-- Mis estilos -->
    <link rel="stylesheet" href="css3/estilos.css">
    
    <title><?php echo $tituloPagina ?></title>
</head>
<body>

    <header>
      <!-- menu horizontal codo a codo -->
      <nav class="navbar navbar-expand-lg navbar-light px-5 pb-3" id="nav_menu">
        <div class="container-fluid">
          <img src="imagenes/codoacodo.png" width="90em" alt="Logo de Codo a Codo" />
          <a class="navbar-brand text-white" href="index.php">Conf Bs As</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup" >
            <div class="navbar-nav">
              <a class="nav-link active text-white" aria-current="page" href="index.php">La conferencia</a>
              <a class="nav-link text-white-50" href="index.php#oradores">Los oradores</a>
              <a class="nav-link text-white-50" href="index.php#lugarfecha">El lugar y la fecha</a>
              <a class="nav-link text-white-50" href="index.php#convertite">Convertite en orador</a>
              <a class="nav-link text-success" href="compra.php">Comprar tickets</a>
            </div>
          </div>
        </div>
      </nav>
    </header>