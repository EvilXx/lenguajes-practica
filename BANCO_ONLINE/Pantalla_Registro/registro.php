<?php
//Aquí poner linea para poder coger la variable $conexión del php donde se realice la conexión con la BD.
  //include conexion.php

//Variable que guardará el userName.
$userName = $_POST["userName"];
//Variable que guardará el password.
$password = $_POST["password"];

echo "Nombre de usuario= " . $userName . "<br />";
echo "Password= " . $password;




//Aquí poner linea para poder cerrar la conexión con la BD a través de la variable $conexion.
  //myslqi_close($conexion);

//Fin de Login.php
 ?>