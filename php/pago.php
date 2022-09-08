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

    <div class="row">
      <div class="col m10">
        <div class="section">  
          <!-- tarjeta 1 -->
          <div class="col s12 m4">
            <div class="card blue-white darken-1 center">
              <div class="card-content black-text center">
                <span class="card-title">Pago</span><br>
                <p>Entra a Paypal para hacer tu transferencia mas segura</p>
              </div>
              <div class="card-action black center">
                <a href="#">Ir a Paypal</a>
              </div>  
            </div>
          </div>
          
          <!-- tarjeta 2 -->
          <div class="col s12 m4">
            <div class="card blue-white darken-1 center">
              <div class="card-content black-text center">
                <span class="card-title">Pago</span><br>
                <p>Entra a Paypal para hacer tu transferencia mas segura</p>
              </div>
              <div class="card-action black center">
                <a href="#">Ir a Paypal</a>
              </div>  
            </div>
          </div>
          
          <!-- tarjeta 3 -->
          <div class="col s12 m4">
            <div class="card blue-white darken-1 center">
              <div class="card-content black-text center">
                <span class="card-title">Pago</span><br>
                <p>Entra a Paypal para hacer tu transferencia mas segura</p>
              </div>
                <div class="card-action black center">
                  <a href="#">Ir a Paypal</a>
                </div>  
              </div>
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