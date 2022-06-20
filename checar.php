<?php session_start();

require 'co.php';
require 'fo.php';

// comprobar session
if (isset($_SESSION['correo'])) {
  // validar los datos por privilegio
  $conexion = conexion($bd_config);
  $id = iniciarSession('usuarios', $conexion);
  

 
  if ($id["rol"] == 'A') {
    header('Location: admi.php');
  } elseif ($id['rol'] == 'U') {
    header('Location: nuestrared.php');
  } else {
    header('Location: sesion.php');
  }}
?>