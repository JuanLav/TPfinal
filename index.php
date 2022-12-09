<?php 

  require_once 'incluidos/inicio.php' ;

  // título de la página para incluidos/header.php
  $tituloPagina = 'Conferencia Buenos Aires - Inicio' ;

  // Títulos del formulario para incluidos/oradores.php
  $titulosFormulario = '      <p class="pt-2 mb-0">CONVERTITE EN UN</p><A NAME="convertite"></A> ' ;
  $titulosFormulario .= '      <p class="h1">ORADOR</p> ' ;
  $titulosFormulario .= '      <p>Anotate como orador para dar una <u>charla ignite</u>. Contanos de qué querés hablar!</p>'  ;

  // valores iniciales (vacíos) para el formulario 
  // pero, si regresa de una validación con errores, precargo lo que sirve de lo que se puso
  // y de paso, ya libero esa parte del array $_SESSION
 
  if (isset ($_SESSION['datos']['nombre'])) {
    $valorNombre = $_SESSION['datos']['nombre'] ;
    unset ($_SESSION['datos']['nombre'] ) ;
  } else {
    $valorNombre = '' ;
  }

  if (isset ($_SESSION['datos']['apellido'])) {
    $valorApellido = $_SESSION['datos']['apellido'] ;
     ($_SESSION['datos']['apellido'] ) ;
  } else {
    $valorApellido = '' ;
  }

  if (isset ($_SESSION['datos']['mail'])) {
    $valorMail = $_SESSION['datos']['mail'] ;
     ($_SESSION['datos']['mail'] ) ;
  } else {
    $valorMail = '' ;
  }

  if (isset ($_SESSION['datos']['tema'])) {
    $valorTema = $_SESSION['datos']['tema'] ;
     ($_SESSION['datos']['tema'] ) ;
  } else {
    $valorTema = '' ;
  }

  $id = NULL ; // como es un ingreso nuevo, no lleva id

    include 'incluidos/header.php' ; 
?>

    <!-- fondo imagen edificio de aguas Av. Córdoba -->
   
    <!-- <div class="mask d-flex flex-column justify-content-between text-white" style="background-color: rgba(0, 0, 0, 0.65);height: 100vh;"> -->
   
      <div class="card bg-dark text-white border-top-0 degrade">
      <img src="imagenes/ba1.jpg" class="card-img" alt="Edificio de aguas en Buenos Aires" />
      <div class="card-img-overlay text-end px-5 text_right text_bottom deg_pos">
        <h4 class="card-title mx-4 text_bottom">Conf Bs As</h4>

        <p class="card-text centered col-md-7 text_right text_bottom" style="max-width: fit-content">Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y la experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a miembros del
evento, a otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para vos. Te esperamos!</p>

        <a href="#convertite" class="btn btn-outline-dark text-white border-white text_bottom">Quiero ser orador</a>
        <a href="compra.htm#compra" class="btn btn-success text_bottom me-4">Comprar tickets</a>
      </div>
    </div>

    <!-- Conoce a los oradores y Cards -->
    <A NAME="oradores"></A>
    <div class="container-fluid text-center px-5" style="width: 80%">
      <p class="pt-2 mb-0">CONOCE A LOS</p>
      <p class="h3 text-uppercase">ORADORES</p>
      
      <!-- Cards-->
      <div class="card border-0">
        <div class="row row-cols-1 row-cols-md-3 g-4 text_left">
          <div class="col">
            <div class="card h-100">
              <img src="imagenes/steve.jpg" class="card-img-top" alt="Foto de Steve Jobs" title="Foto de Steve Jobs"/>
              <div class="card-body">
                <div class="container px-5 py-0">
                  <div class="row ms-0 position-absolute start-0">
                    <div class="col card-text bg-warning rounded mx-1 p-0 text-center">
                      <small><strong>Javascript</strong></small>
                    </div>
                    <div class="col card-text bg-info rounded text-white mx-1 p-0 mb-0 text-center">
                      <small><strong>React</strong></small>
                    </div>
                  </div>
                </div>

                <h5 class="card-title">Steve Jobs</h5>
                <p class="card-text">
                  <small>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio iste saepe voluptate ipsa eaque, nemo officiis id est illo tempora in quisquam possimus exercitationem soluta, pariatur excepturi ducimus. Fugiat, nobis.</small>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="imagenes/bill.jpg" class="card-img-top" alt="Foto de Bill Gates" title="Foto de Bill Gates" />
              <div class="card-body">
                <div class="container px-5 py-0">
                  <div class="row ms-0 position-absolute start-0">
                    <div class="col card-text bg-warning rounded mx-1 p-0 mb-0 text-center">
                      <small><strong>Javascript</strong></small>
                    </div>
                    <div class="col card-text bg-info rounded text-white mx-1 p-0 mb-0 text-center">
                      <small><strong>React</strong></small>
                    </div>
                  </div>
                </div>

                <h5 class="card-title">Bill Gates</h5>
                <p class="card-text">
                  <small>Adipisci porro repellat facere quaerat sunt rerum qui ipsa iure necessitatibus repudiandae, quidem corporis. Exercitationem quidem error in suscipit voluptatem assumenda ipsum architecto debitis repudiandae nesciunt ipsa, pariatur hic ad.</small>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="imagenes/ada.jpeg" class="card-img-top" alt="Foto B/N de Ada Lowelace" title="Foto de Ada Lowelace" />
              <div class="card-body">
                <div class="container px-5 py-0">
                  <div class="row ms-0 position-absolute start-0">
                    <div class="col card-text bg-secondary rounded mx-1 p-0 mb-0 text-center text-white">
                      <span class="badge badge-warning">Negocios</span>
                    </div>
                    <div class="col card-text bg-danger rounded text-white mx-1 p-0 mb-0 text-center">
                      <span class="badge badge-warning">Startups</span>
                    </div>
                  </div>
                </div>

                <h5 class="card-title">Ada Lowelace</h5>
                <p class="card-text">
                  <small>Consequuntur totam ex rerum temporibus. Nam quisquam quos adipisci eligendi aut repellendus dolor qui illum impedit? Non, animi quam. Quae sunt commodi tenetur sint nulla recusandae consectetur, consequuntur animi architecto.</small>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <!-- Fondo playa y texto Bs As - Octubre -->
    <A NAME="lugarfecha"></A>
    <div class="container-fluid">
      <div class="row justify-content-center text-white div_double">
        <div class="col-6 d-inline ps-0">
          <img src="imagenes/honolulu.jpg" alt="Honolulu" class="card-img-top" />
        </div>
        <div class="col-6 d-inline div_double">
          <br />
          <p class="h4">Bs As - Octubre</p>
          <p>Buenos Aires es la provincia y localidad más grande de Argentina; en los Estados Unidos, Honololu es la
            más sureña de entre las principales ciudades estadounidenses. Aunque el nombre de Honololu se refiera al área
            urbana en la costa sudeste de la isla de Oahu, la ciudad y el condado de Honololu han formado una ciudad
            condado consolidada que cubre toda la ciudad (aproximadamente 600 km<sub>2</sub> de superficie).</p>
          <a href="#" class="btn btn-outline-dark text-white border-white">Conocé más</a>
        </div>
      </div>
    </div>
    <br />

<?php 

  include 'incluidos/formulariooradores.php' ;
  include 'incluidos/footer.php' ; 