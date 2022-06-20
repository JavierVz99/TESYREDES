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
    <link rel="stylesheet" href="css/sesion.css">
    <title>Inicio de sesión</title>
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
        <h1 class="title">Iniciar sesión</h1>
    </div>
    <div class="miscosas">
        <div class="formss">
            <form action="sesionn.php" method="POST" enctype="application/x-www-form-urlencoded" class="formtesyred">
                <p class="img-centrado"><img src="assets/logo.png" alt="logo" class="img-logo"></p>
                <div class="inputs2">
                    <input type="email" name="correo" id="" placeholder="Escribe tu correo electronico" required>
                </div>
                <div class="inputs3">
                    <input type="password" name="cont" id="passwd" placeholder="Escribe tu contraseña" required>
                </div>
                <div class="inputs4">
                    <input type="submit" name="enviar" value="INICIAR SESIÓN">
                </div>
            </form>
        </div>
    </div>

 
</body>
</html>