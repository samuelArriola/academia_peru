<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ACADEMIA</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

<!--responsivida del nemu pegable-->
<div class="sidenav" id="mobile-demo">
    <div class=" container section ">
      <div class="center">
      <a href="../index.php" class=" brand-logo"><img width="100" height="90" class="circle responsive-img" src="https://cdn.pixabay.com/photo/2016/12/28/08/15/hummingbird-1935665__340.png"> </a>
    </div> <br>
      <span class="white-black email"><i class="material-icons left orange-text">email</i>**********@gmail.com</span><br>
      <span class="white-black email"><i class="material-icons left blue-text">call</i>  *** *** ****</span> 
    </div>

    <div class="divider"></div>

    <ul> <!--position: https://www.mclibre.org/consultar/htmlcss/css/css-posicionamiento-absoluto.html-->
        <li>
          <ul><a class="subheader"> &nbsp; MENU</a> <!-- esta clase coloca el texto mas opaco-->
            <li>
              <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header">¿Quienes Somos?</div>
                    
                    <div class="collapsible-body"  style=" position: relative; left: 30px;"><a href="#!">materia 1</a> </div>
                    <div class="collapsible-body"  style=" position: relative; left: 30px;"><a href="#!">materia 2</a></div>
                    <div class="collapsible-body"  style=" position: relative; left: 30px;"><a href="#!">materia 3</a></div>
                    <div class="collapsible-body"  style=" position: relative; left: 30px;"><a href="#!">materia 4</a></div>    
                </li>
              </ul>
            </li>
            <li><a href="../index.php">Cerrar Sesión</a></li>
        </ul>
        <ul> <!--position: https://www.mclibre.org/consultar/htmlcss/css/css-posicionamiento-absoluto.html-->
        <li>
          <ul><a class="subheader"> &nbsp; MATERIAS</a> <!-- esta clase coloca el texto mas opaco-->
            <li>
              <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header">Español</div>
                    
                    <div class="collapsible-body"  style=" position: relative; left: 30px;"><a href="#!">Actividad 1</a> </div>
                    <div class="collapsible-body"  style=" position: relative; left: 30px;"><a href="#!">Actividad 2 2</a></div>
                    <div class="collapsible-body"  style=" position: relative; left: 30px;"><a href="#!">Actividad 3</a></div>
                    <div class="collapsible-body"  style=" position: relative; left: 30px;"><a href="#!">Actividad 4</a></div>    
                </li>
                <li>
                    <div class="collapsible-header">Ingles</div>
                    
                    <div class="collapsible-body"  style=" position: relative; left: 30px;"><a href="#!">Actividad 1</a> </div>
                    <div class="collapsible-body"  style=" position: relative; left: 30px;"><a href="#!">Actividad 2 2</a></div>
                    <div class="collapsible-body"  style=" position: relative; left: 30px;"><a href="#!">Actividad 3</a></div>
                    <div class="collapsible-body"  style=" position: relative; left: 30px;"><a href="#!">Actividad 4</a></div>    
                </li>
              </ul>
            </li>
        </ul>
      </li>
   </ul>
</div>

  <!-- lista desplegable del menu ¿quienes somos?-->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li class="divider"></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
  </ul>
  
   <!-- Navegador-->
   <div class="navbar-fixed">
    <nav class="blue" role="navigation"> 
        <div class="nav-wrapper container">
          <a href="../index.php" class="left brand-logo"><img width="60" height="50" class="circle responsive-img"  src="https://cdn.pixabay.com/photo/2016/12/28/08/15/hummingbird-1935665__340.png">   
          <span class="" style="vertical-align: top;">Academia Peru</span>            <!-- el style es para pode centrar el nombre -->
          </a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="material-icons ">menu</i></a>
          <ul  id="nav-mobile" class="right hide-on-med-and-down">
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">¿Quienes Somos?<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="../index.php">Cerrar Sesión</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

    <div class="row">
      <div class="col m10">
        <nav class="nav-wrapper white hide-on-med-and-down">
          <div class="container">
            <ul id="nav-mobile" class="">
              <li><a href="sass.html" class="blue-text">Español</a></li>
              <li><a href="badges.html" class="blue-text">Ingles</a></li>
              <li><a href="collapsible.html" class="blue-text">Fisica</a></li>
              <li><a href="sass.html" class="blue-text">Matematicas</a></li>
              <li><a href="badges.html" class="blue-text">Naturales</a></li>
              <li><a href="collapsible.html" class="blue-text">sociales</a></li>
              <li><a href="collapsible.html" class="blue-text">filosofia</a></li>
            </ul>
          </div>
        </nav>

        <div class="row">
          <div class="col m2">
            <ul class="collapsible hide-on-med-and-down" data-collapsible="accordion">
              <li><div class="collapsible-header"><a class="black-text" href="../php/acerca.php"></i>Contenido 1</a></div></li>
              <li><div class="collapsible-header"><a  class="black-text" href="../php/grupo.php"></i>Contenido 2</a></div></li>
              <li><div class="collapsible-header"><a  class="black-text" href="../php/donacion.php"></i>Taller 1</a></div></li>
              <li><div class="collapsible-header"><a  class="black-text" href="../php/donacion.php"></i>Taller 2</a></div></li>
              <li><div class="collapsible-header"><a  class="black-text" href="../php/donacion.php"></i>Taller 2</a></div></li>
              <li><div class="collapsible-header"><a  class="black-text" href="../php/donacion.php"></i>Quiz 1</a></div></li>
              <li><div class="collapsible-header"><a  class="black-text" href="../php/donacion.php"></i>Quiz 2</a></div></li>
              <li><div class="collapsible-header"><a  class="black-text" href="../php/donacion.php"></i>Examen 1</a></div></li>
              <li><div class="collapsible-header"><a  class="black-text" href="../php/donacion.php"></i>Examen 2</a></div></li>
            </ul>
        </div>

        <div class="col m10 ">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet eaque tempora nulla dolor vero labore blanditiis ipsum, magnam dignissimos vel nesciunt sequi amet nam, impedit alias distinctio itaque id temporibus.
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis cumque eaque voluptates eligendi aut dolorem magnam provident, nulla maiores rerum blanditiis odio repudiandae sapiente fuga velit sunt corporis. Quaerat, voluptatum?
        </div>

        </div>

      </div>

      <div class="col m2">
        <h2>Este espacio espara publicidad</h2>      
      </div>
    </div>
   
  


  <?php include('../html/footer.html'); ?>
  

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>document.addEventListener('DOMContentLoaded', function() { M.AutoInit();});</script>
  <script src="../js/ini.js"></script>
</body>
</html>