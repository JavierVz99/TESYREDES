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

include("conexion.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menudebarras.css">
    <link rel="stylesheet" href="css/registrarse.css?see=1.1">
    <title>Registrarse</title>
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
        <h1 class="title">REGISTRARSE</h1>
    </div>
    <div class="miscosas">
        <div class="formss">
            <form action="registrarse.php" method="POST" enctype="application/x-www-form-urlencoded" class="formtesyred" id="formtesyred">
                <p class="img-centrado"><img src="assets/logo.png" alt="logo" class="img-logo"></p>
                <div class="inputs1">
                    <input type="text" name="nomcom" id="" placeholder="Escribe tu nombre" required>
                    <input type="text" name="appelidos" id="" placeholder="Escribe tus apellidos" required>
                </div>
                <div class="inputs2">
                    <input type="email" name="correo" id="" placeholder="Escribe tu correo electronico" required>
                </div>
                <div class="inputs3">
                    <input type="password" name="cont" id="passwd" placeholder="Escribe tu contraseña" required>
                </div>
                <div class="inputs3">
                    <span name="" id="passstrength" ></span>
                </div>
                <div class="inputs4">
                    <input type="button"  name="enviar" value="CONTINUAR" class="bpas">
                </div>
            </form>
        </div>
    </div>

<?php
if($_POST){
    $nombre=$_POST['nomcom'];
    $apellidos=$_POST['appelidos'];
    $correo=$_POST['correo'];
    $password=$_POST['cont'];
    $rol="U";

    $password = hash('sha512', $password);

   if(empty($nombre) || empty($apellidos) || empty($correo) || empty($password)){
    echo '<script>window.alert("Rellene todos los campos porfavor");</script>';
   }else{
    $sql = "INSERT INTO usuarios (nombre, apellidos, correo, contrasena, rol) VALUE('$nombre','$apellidos','$correo','$password','$rol')";
    if(mysqli_query($conn, $sql)){
        echo '<script>window.alert("Enhorabuena te has registrado en TESYREDES");</script>';
    }else {
        echo '<script>window.alert("Lo sentimos hay un error en el sistema");</script>' . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
   }
}
?>
<script src="js/query.js?see=1.0"></script>
<script src="js/validarcontr.js?see=1.0"></script>
</body>
</html>