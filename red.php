<?php
error_reporting(0); 
session_start();
if (isset($_SESSION['correo'])) {
    require "conexion.php";$email =$_SESSION['correo'];
    $sql="SELECT * FROM usuarios WHERE correo='$email'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();   
    if($row['rol'] == 'cliente'){echo '<script>window.location = "nuestrared.php";</script>';
    }elseif($row['rol'] == 'administrador'){echo '<script>window.location = "admin.php";</script>';
    }else{
}} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menudebarras.css">
    <link rel="stylesheet" href="css/red.css">
    <title>Redes</title>
</head>
<body>
    <nav>
        <ul class="menu">
            <li class="li-menu"><a href="index.php" class="menu-enlances">Principal</a></li>
            <li class="li-menu"><a href="red.php" class="menu-enlances">Redes</a></li>
            <li class="li-menu"><a href="registrarse.php" class="menu-enlances">Registrarse</a></li>
            <li class="li-menu"><a href="sesion.php" class="menu-enlances">Iniciar sesión</a></li>
        </ul>
    </nav>
    <div class="principal">
        <h1 class="title">REDES</h1>
    </div>
    <div class="miscosas">
        <h1 class="title">Construcción de nuestra red</h1>
        <hr>
        <p class="img-centrado"><img src="assets/Edi.png" alt="IMAGEN-PLANO-ESCUELA" class="img-edi"></p>
        <p class="texto">El presente proyecto se basara en la creación de red para la institución educativa 
            TESI, su característica principal es que cuente con una conexión estable de red 
            inalámbrica, en toda la institución. Por otra parte contara con directorios 
            compartidos que puedan ser accesados por muchos usuarios de red, debe ser 
            confiable ya que al ocuparla, los usuarios puedan interconectar fácilmente sus 
            dispositivos. Incluso si necesitan consultar su correo, asistir alguna reunión y 
            acceder a sus datos desde otra computadora, su experiencia de trabajo 
            permanecerá estable.</p>
        <p class="texto">Para analizar esta problemática es necesario llevar a cabo una inspección en cada 
            uno de los edificios, ya que se debe tomar en cuenta algunos puntos como verificar 
            la construcción del edificio, de que material esta hecho, que tipo de materiales son 
            los que utilizan en las aulas, y sobre todo el punto más importante es verificar el tipo 
            de medio ambiente que hay en la zona, para poder llevar a cabo un reporte de los 
            materiales que son viables para dicha red</p>
    </div>
    <div class="miscosas2">
        <h1 class="title">Registrate</h1>
        <hr>
        <p class="texto">Para ver nuestra red primero necesita una cuenta con nosotros. Por favor dirígete a la sección de "Registrarse"
            para obtener una cuenta y poder visualizar nuestra red.
        </p>
    </div>
   
</body>
</html>