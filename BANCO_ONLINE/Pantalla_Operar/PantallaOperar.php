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

    <!--Enlace con nuestro archivo Javascript-->
    <script src="Operar.js"></script>
  </head>

  <body>
    <!--Encapsulado del contenedor principal-->
    <div class="modal-dialog">
      <div class="col-sm-8 main-section">
        <h1>OPERACIONES</h1>

        <!--Contenido del contenedor principal-->
        <div class="modal-content">
          <br><br><br>

          <!--Insertamos Logo de nuestro COLE-BANCO-->
          <div class="col-12 user-img">
            <img src="Elementos_Estaticos/Imagenes/Escolapios.jpg"/>
          </div>

          <!--FORMULARIO PARA INGRESAR DINERO-->
          <form class="col-12" action="Operaciones.php" method="post">
              <!--Campo para introducir cantidad a ingresar (inicialmente oculto)-->
              <div class="form-group" id=CampoIngreso style="display:none">
                <input type="number" class="form-control" placeholder="Introduce cantidad" name="cantidadIngresada" required autocomplete="off"/>
              </div>
              <!--Botón elegible para realizar ingreso (enlazado con archivo Operar.js)-->
              <div class="form-group" id=BotonIngresar onclick="ingresarDinero()">
                <button type="button" class="btn btn-primary">
                  <i class="fas fa-sign-in-alt"></i><br> INGRESAR DINERO </button>
              </div>
              <!--Botón para confirmar ingreso (inicialmente oculto)-->
              <div class="form-group" id=BotonConfirmarIngreso style="display:none">
                <button type="submit" class="btn btn-primary" name="BotonConfirmarIngreso">
                  <i class="fas fa-sign-in-alt"></i><br> CONFIRMAR INGRESO </button>
              </div>
          </form>

          <!--FORMULARIO PARA RETIRAR DINERO-->
          <form class="col-12" action="Operaciones.php" method="post">
              <!--Campo para introducir cantidad a retirar (inicialmente oculto)-->
              <div class="form-group" id=CampoRetirada style="display:none">
                <input type="number" class="form-control" placeholder="Introduce cantidad" name="cantidadRetirada" required autocomplete="off"/>
              </div>
              <!--Botón elegible para realizar retirada (enlazado con archivo Operar.js)-->
              <div class="form-group" id=BotonRetirar>
                <button type="button" class="btn btn-primary" onclick="retirarDinero()">
                  <i class="fas fa-sign-out-alt"></i><br> RETIRAR DINERO </button>
              </div>
              <!--Botón para confirmar retirada (inicialmente oculto)-->
              <div class="form-group" id=BotonConfirmarRetirada style="display:none">
                <button type="submit" class="btn btn-primary" name="BotonConfirmarRetirada">
                  <i class="fas fa-sign-out-alt"></i><br> CONFIRMAR RETIRADA </button>
              </div>
          </form>

          <!--FORMULARIO PARA CONSULTAR SALDO-->
          <form class="col-12" action="Operaciones.php" method="post">
              <!--Botón elegible para consultar saldo-->
              <div class="form-group" id=BotonConsultar>
                <button type="submit" class="btn btn-primary" name="BotonConsultar">
                  <i class="fas fa-euro-sign"></i><br> CONSULTAR SALDO </button>
              </div>
          </form>

          <!--Botón para volver a PantallaOperaciones (inicialmente oculto)-->
          <div class="col-12" id=BotonVolverPantallaOperar style="display:none">
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
