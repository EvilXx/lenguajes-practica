<?php

  //Aquí hay que poner linea para poder coger la variable $conexión del archivo php donde se realice la conexión con la BD.
  //include conexion.php

  //Si se pulsa el botón de CONFIRMAR INGRESO:
  if (isset($_POST['BotonConfirmarIngreso'])) {
        Echo "Se ha pulsado el botón ConfirmarIngreso." . "<br>";
        //Guardamos en una variable la cantidad a ingresar.
        $ingreso = $_POST["cantidadIngresada"];

        //Aquí se añadiria el dinero a la BD.

        //Ahora mostramos un mensaje de confirmación al user.
        echo '<script language="javascript">
          alert("HEMOS INGRESADO CORRECTAMENTE '.$ingreso.' € EN SU CUENTA !!");
          window.location.href="PantallaOperar.php";
          </script>';

  //Si se pulsa el botón de CONFIRMAR RETIRADA:
  } else if (isset($_POST['BotonConfirmarRetirada'])) {
        Echo "Se ha pulsado el botón ConfirmarRetirada." . "<br>";
        //Guardamos en una variable la cantidad a retirar.
        $retiro = $_POST["cantidadRetirada"];

        //Aquí hay que comprobar que el user tiene dinero suficiente.
        //(Habría dos posibilidades):

          // 1-Si el user SI tiene dinero suficiente...

            //Aquí se RETIRARÍA el dinero a la BD.

            //Ahora mostramos un mensaje de confirmación al user.
            echo '<script language="javascript">
              alert("HEMOS RETIRADO CORRECTAMENTE '.$retiro.' € DE SU CUENTA !!");
              window.location.href="PantallaOperar.php";
              </script>';

          // 2-Si el user NO tiene dinero suficiente...
            //Mostramos un mensaje de error al user.
            echo '<script language="javascript">
              alert("NO HEMOS PODIDO RETIRAR '.$retiro.' € DE SU CUENTA \nUSTED NO TIENE SALDO SUFICIENTE !!");
              window.location.href="PantallaOperar.php";
              </script>';

  //Si se pulsa el botón de CONSULTAR SALDO:
  }else if (isset($_POST['BotonConsultar'])) {
        //Hay que guardar en esta varible el saldo de la cuenta:
        $saldo=20;
        //Ahora redireccionamos a la PantallaOperar enviando por URL la variable que contiene el saldo de la cuenta.
        header ("location: PantallaMostrarSaldo.php?saldo=$saldo");
  }

  //Aquí poner linea para poder cerrar la conexión con la BD a través de la variable $conexion.
  //myslqi_close($conexion);

//Fin de Login.php
?>
