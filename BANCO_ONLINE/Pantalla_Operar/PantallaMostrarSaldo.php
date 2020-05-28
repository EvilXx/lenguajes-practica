<!DOCTYPE html>
<html>
  <head>
    <title>BANCO ESCOLAPIOS</title>

    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="Elementos_Estaticos/Css/Operar.css">

    <!--Enlace con Javascript-->
    <script src="Operar.js"></script>
  </head>

  <body>
    <!--Encapsulado del contenedor principal-->
    <div class="modal-dialog">
      <div class="col-sm-8 main-section">
        <h1>SALDO ACTUAL</h1>

        <!--Contenido del contenedor principal-->
        <div class="modal-content">
          <br><br><br>

          <!--Insertamos Logo de nuestro COLE-BANCO-->
          <div class="col-12 user-img">
            <img src="Elementos_Estaticos/Imagenes/Escolapios.jpg"/>
          </div>

          <!--Campo para mostrar saldo (recuperamos con GET la variable saldo después de consultarla)-->
          <div class="col-12" id=CampoSaldo>
            <input type="text" id=cantidadSaldo name="cantidadSaldo" style="text-align:center" readonly disabled value=<?php echo $_GET["saldo"]."€";?> />
          </div><br>

          <!--Botón para volver a PantallaOperaciones-->
          <div class="col-12" id=BotonVolverPantallaOperar>
            <a href="PantallaOperar.php">
              <button class="btn btn-primary">
                <i class="fas fa-arrow-left"></i> VOLVER
              </button>
            </a>
          </div>

          <!--Botón para salir a PantallaLogin-->
          <div class="col-12" id="butSalir">
            <a href="../Pantalla_Login/Login.html">
              <button class="btn btn-danger">
                <i class="fas fa-power-off"></i> SALIR
              </button>
            </a>
          </div>

        </div>
      </div>
    </div>
  </body>
</html>
