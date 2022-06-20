<?php
error_reporting(0);
function conexion($bd_config){
  try {
    $conexion = new PDO('mysql:host=bsmuaku4qtaz0rptiirp-mysql.services.clever-cloud.com;dbname='.$bd_config['db_name'],$bd_config['user'],$bd_config['pass']);
    return $conexion;
  } catch (PDOException $e) {
    return false;
  }
}

function limpiarDatos($datos){
  $datos = htmlspecialchars($datos);
  $datos = trim($datos);
  $datos = filter_var($datos, FILTER_SANITIZE_STRING);

  return $datos;
}

function iniciarSession($table, $conexion){
  $statement = $conexion->prepare("SELECT * FROM $table WHERE correo = :corr");
  $statement->execute([
    ':corr' => $_SESSION['correo'],
    
  ]);
  return $statement->fetch(PDO::FETCH_ASSOC);
}




