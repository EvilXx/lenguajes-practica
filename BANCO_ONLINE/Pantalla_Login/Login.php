<?php
  //Aquí poner linea para poder coger la variable $conexión del php donde se realice la conexión con la BD.
    //include conexion.php

  //Variable que guardará el userName.
  $userName = $_POST["userName"];
  //Variable que guardará el password.
  $password = $_POST["password"];

  echo "Nombre de usuario= " . $userName . "<br />";
  echo "Password= " . $password;

  //Ahora irán las lineas para ver si coincide usuario y contraseña con lo que haya en base de datos.
  //Habrá dos opciones:

    // 1-Si el usuario y contraseña son correctos:
      //Nos redireccionará a la página de Operar.html
      header ("location: ../Pantalla_Operar/PantallaOperar.php");

    // 2-Si el usuario y contraseña no son correctos:
      //Nos añadirá un mensaje de error y luego nos redireccionará a la página de Login.
      echo '<script type="text/javascript">
      alert("Usuario o Contraseña incorrecta");
            window.location="../Pantalla_Login/Login.html";
      </script>';

  //Aquí poner linea para poder cerrar la conexión con la BD a través de la variable $conexion.
    //myslqi_close($conexion);

//Fin de Login.php
 ?>
