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

    <?php include('../html/nav_1.html'); ?>
 
   <div class="row">

      <!--login-->
      <div class="col m10">

        <div class="container section">                              
          <div class="col s12 m12">
              <h2 class="header"></h2>
              <div class="card horizontal medium">
                <div class="card-image">
                  <img src="https://image.freepik.com/foto-gratis/charla-despues-seminario_1098-15311.jpg">
                </div>
                <div class="card-stacked">
                    <!--login -->
                  <div class="card-content">
                      <div class="section center ">
                      <i class="blue-text large material-icons">account_circle</i>
                      </div>     
                      <form action="" method="post">
                      <input name="usuario" type="text" class="validate" placeholder="Usuario" required>
                      <input name="pass" type="password" class="validate" placeholder="Contraseña" required>
                        <div class=" section center"> <a  href="crear_sesion.php">Crear Sessión</a></div>
                  </div>
                  <div class="card-action center">
                      <!-- <input  class="blue btn waves-effect waves-light" type="submit" value="Entrar" /> -->
                      <a  class="blue btn waves-effect waves-light"  href="inicio.php">Entrar </a><!--muestra-->
                      </form>
                  </div>
                </div>
            </div>
          </div>       
        </div> 
          
      </div>

        <!-- publicidad -->
      <div class="col m2">
        <h3>Este espacio esta reservado para poner publicidad externas de la academia!!</h3>
        </div>
      </div>

  </div>

  <?php include('../html/footer.html'); ?>
  

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>document.addEventListener('DOMContentLoaded', function() { M.AutoInit();});</script>
  <script src="../js/ini.js"></script>
</body>
</html>