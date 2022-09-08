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

    <?php include('../html/nav_2.html'); ?>



  <!--Publicidad de la Academia -->
  <div class="slider section scrollspy"  style="z-index: 1;" id="1">
    <ul class="slides">
      <li>
        <img src="https://cdn.pixabay.com/photo/2020/05/24/13/29/dubrovnik-5214286_960_720.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://cdn.pixabay.com/photo/2020/06/18/17/04/sunset-5314307_960_720.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://cdn.pixabay.com/photo/2015/02/17/09/33/machu-pichu-639175_960_720.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://cdn.pixabay.com/photo/2020/06/09/18/11/box-write-in-it-5279529_960_720.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
 
  <!-- tarjetas-->
  <div class="row section">
    <div class="col m10">
      <div class="row">
         
          <!-- tarjeta 1-->
          <div class="container ">
            <div class="col m6">
              <div class="card  blue lighten-1  ">
                <div class="card-image">
                  <img class="section"  src="https://cdn.pixabay.com/photo/2020/06/17/15/26/friendship-5310026_960_720.jpg">
                  <span class="card-title whithe-text">SEMESTRE 1</span>
                </div>
                <div class="card-content">
                  <p>Aqui podrás ver las materias del primer semestres.</p>
                </div>
                <div class="card-action center-align">
                  <form action="index_2.php" method="POST">
                    <input type="hidden" name="materia" value="ESPAÑOL">
                    <!--<button class="btn waves-effect waves-light white black-text" type="submit" name="action">Ver contenido</button>-->
                    <a  class="btn waves-effect waves-light white black-text"  href="contenido_curso.php">ver contenido </a><!--muestra-->
                  </form>
                </div>
              </div>
            </div>

            <!-- tarjeta 2-->
            <div class="col m6">
              <div class="card  blue lighten-1">
                <div class="card-image">
                  <img class="section" src="https://cdn.pixabay.com/photo/2020/06/16/20/36/balloon-5307204_960_720.jpg">
                  <span class="card-title white-text">SEMESTRE 2</span>
                </div>
                  <div class="card-content">
                  <p>Aqui podrás ver las materias del segundo semestre.</p>
                  </div>
                  <div class="card-action center-align">
                    <form action="index_2.php" method="POST">
                        <input type="hidden" name="materia" value="ESPAÑOL">
                         <!--<button class="btn waves-effect waves-light white black-text" type="submit" name="action">Ver contenido</button>-->
                    <a  class="btn waves-effect waves-light white black-text"  href="contenido_curso.php">ver contenido </a><!--muestra-->
                    </form>
                  </div>
              </div>
            </div>
            
        </div>
      </div>
    </div>

  <!-- publicidad -->
  <div class="col m2">
    <h5>Este espacio esta reservado para poner publicidad externas de la academia!! Samuel Arriola</h5>
    </div>
  </div>


  <?php include('../html/footer.html'); ?>
  

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>document.addEventListener('DOMContentLoaded', function() { M.AutoInit();});</script>
  <script src="..\js\ini.js"></script>
</body>
</html>