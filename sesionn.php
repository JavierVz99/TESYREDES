<?php

error_reporting(0);
session_start();
if (isset($_SESSION['correo'])) {
    require "conexion.php";$email =$_SESSION['correo'];
    $sql="SELECT * FROM usuarios WHERE correo='$email'";
    $result = $conn->query($sql);$row = $result->fetch_assoc();   
    if($row['rol'] == 'cliente'){
        echo '<script>window.location = "nuestrared.php";</script>';
    }else{
        echo '<script>window.location = "admin.php";</script>';
}
} 



if($_GET){
    header('location: sesion.php');
}
session_start();

require 'co.php';
require 'fo.php';

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $correo = $_POST['correo'];
  $password = $_POST['cont'];
  $password = hash('sha512', $password);


  $conexion = conexion($bd_config);
  $statement = $conexion->prepare('SELECT * FROM usuarios WHERE correo= :email  AND contrasena = :pass');
  $statement->execute(
    array(
        ':email' => $correo,
        ':pass' => $password    
    )    
);


  $resultado = $statement->fetch();

 
if ($resultado !== false) {
    $_SESSION['correo'] = $correo;
    header('Location: '.RUTA.'checar.php');
}else {
    echo '<script>window.alert("Lo sentimos las credenciales son invalidas");</script>';
    }
  

 
}
require 'sesion.php';

?>