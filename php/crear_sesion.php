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
      <div class="col m9">
      <div class="container section">                
               <!--Formulario-->
                <div class="card ">
                    <div class=" card-image center-align ">
                     <i class="blue-text large material-icons">person_add</i>
                    </div>

                    <div class="card-content">
                      <span class="card-title center-align ">Registrar Usuario </span> 
                        <form action="../php/r_usuario.php" method="post">
                          <div class="row section">
                            <div class="input-field col s12 m6">
                              <input id="nombre" type="text" name=""   placeholder=""  class="validate" required maxlength="10">   
                              <label for="nombre">Nombre</label>
                            </div>
                            <div class="input-field col m6">
                              <input id="apellido" type="password" name=""  placeholder="" minlength="6" class="validate" required maxlength="15">    
                              <label for="apellido">Apellido</label>
                            </div>
                            <div class="input-field col s12">
                              <input id="identificacion" type="text" name="" value="" placeholder="" maxlength="15" /><br>
                              <label for="identificacion">Identificación</label>
                            </div>
                            <div class="input-field col s12">
                              <input id="correo" type="email" name="" value="" placeholder="" /><br maxlength="30">
                              <label for="correo">Correo</label>
                            </div>
                            <div class="input-field col s12">
                              <input id="telefono" type="number" name="" value="" placeholder="" maxlength="10" /><br>
                              <label for="telefono">Telefono</label>
                            </div>
                            <div class="center section col s12">
                              <!-- <input  class="blue btn waves-effect waves-light" type="submit" value="Guardar" />   -->
                              <a  class="blue btn waves-effect waves-light"  href="inicio_sesion.php">Crear </a><!--muestra-->

                            </div>   
                          </div>
                        </form>
                    </div>
                  </div>
            </div>
      </div>

        <!-- publicidad -->
      <div class="col m3">
        <h3>Este espacio esta reservado para poner publicidades externas a las de la academia de peru!!</h3>
      </div>

  </div>

  <?php include('../html/footer.html'); ?>
  

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>document.addEventListener('DOMContentLoaded', function() { M.AutoInit();});</script>
  <script src="../js/ini.js"></script>
</body>
</html>