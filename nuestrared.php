<?php
session_start();
if (!isset($_SESSION['correo'])) {
	echo '
    <script>
	alert("INICIA SESION PARA VER LOS PLANOS");
	window.location = "sesion.php";
	</script>';
	session_destroy();
	die();
}
require 'conexion.php';
$use = $_SESSION['correo'];
$sql = "SELECT * FROM usuarios WHERE correo= '$use' ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menudebarras.css">
    <link rel="stylesheet" href="css/nuestrared.css">
    <title>Creación de la red</title>
</head>
<body>
    <nav>
        <ul class="menu">
            <li class="li-menu"><a href="nuestrared.php" class="menu-enlances">Creación de la red</a></li>
            <li class="li-menu"><a href="cerrarsesion.php" class="menu-enlances">Cerrar sesión</a></li>
            <li class="li-menu"><a href="#" class="menu-enlances"><?php echo $row['nombre']?> <?php echo $row['apellidos'];?></a></li>
        </ul>
    </nav>
    <div class="principal">
        <h1 class="title">CREACIÓN DE LA RED</h1>
    </div>
    <div class="miscosas">
        <h1 class="title">PLANOS</h1>
        <hr>
        <p class="texto">Se llevara a cabo un Plano de los edificios del 
            TESI principalmente se le sacaron medidas al edificio H, E, USOS MULPTIPLES Y CAFETERIA donde se encuentra la 
            biblioteca, aulas de cómputo y sanitarios, estancias para disgustar el alimento, auditorio, area administrativa, entre otros.</p>
       <h1 class="title">Edificio H</h1>
       <hr>
       <div class="edi">
        <p class="img-centrado">
            <figure>
                <a href="assets/HB.PNG" target="_blank"><img src="assets/HB.PNG" alt="" class="img-pl"></a>
                <figcaption>PLANOS DEL EDIFICIO H</figcaption>
            </figure>
        </p>
       <figure>
        <p class="img-centrado"> <a href="assets/HA.PNG" target="_blank"><img src="assets/HA.PNG" alt="" class="img-pl"></a></p>
        <figcaption>PLANOS DEL EDIFICIO H</figcaption>
       </figure>
       </div>
       <h1 class="title">Edificio E</h1>
       <hr>
       <div class="edi">
        <p class="img-centrado">
            <figure>
                <a href="assets/EB.PNG" target="_blank"><img src="assets/EB.PNG" alt="" class="img-pl"></a>
                <figcaption>PLANOS DEL EDIFICIO E</figcaption>
            </figure>
        </p>
       <figure>
        <p class="img-centrado"> <a href="assets/EA.PNG" target="_blank"><img src="assets/EA.PNG" alt="" class="img-pl"></a></p>
        <figcaption>PLANOS DEL EDIFICIO E</figcaption>
       </figure>
       </div>
       <h1 class="title">Edificio de usos multiples</h1>
       <hr>
       <div class="edi">
        <p class="img-centrado">
            <figure>
                <a href="assets/UM.PNG" target="_blank"><img src="assets/UM.PNG" alt="" class="img-pl"></a>
                <figcaption>PLANOS DEL EDIFICIO DE USOS MULTIPLES</figcaption>
            </figure>
        </p>
       </div>
       <h1 class="title">Cafeteria</h1>
       <hr>
       <div class="edi">
        <p class="img-centrado">
            <figure>
                <a href="assets/CF.PNG" target="_blank"><img src="assets/CF.PNG" alt="" class="img-pl"></a>
                <figcaption>PLANOS DE LA CAFETERIA</figcaption>
            </figure>
        </p>
       </div>
    </div>
    <div class="miscosas">
        <h1 class="title">TOPOLOGÍA FÍSICA</h1>
        <hr>
        <p class="texto">Decidimos escoger la topología de árbol ya que nos permite a los usuarios tener 
            varios servidores en la red.Esta topología trabaja de la misma forma que la de bus y estrella por el modo de 
            actuar del nodo, ya que el nodo de interconexión trabaja de modo difusión, pues la 
            información se propaga hacia todas las estaciones, solo que en las ramificaciones 
            se extiende a partir de un punto de raíz. </p>
       <h1 class="title">Edificio H</h1>
       <hr>
       <div class="edi">
        <p class="img-centrado">
            <figure>
                <a href="assets/HR.PNG" target="_blank"><img src="assets/HR.PNG" alt="" class="img-pl"></a>
                <figcaption>TOPOLOGÍA DEL EDIFICIO H</figcaption>
            </figure>
        </p>
       </div>
       <h1 class="title">Edificio E</h1>
       <hr>
       <div class="edi">
        <p class="img-centrado">
            <figure>
                <a href="assets/ER.PNG" target="_blank"><img src="assets/ER.PNG" alt="" class="img-pl"></a>
                <figcaption>TOPOLOGÍA DEL EDIFICIO E</figcaption>
            </figure>
        </p>
       </div>
       <h1 class="title">Edificio de usos multiples</h1>
       <hr>
       <div class="edi">
        <p class="img-centrado">
            <figure>
                <a href="assets/UMR.PNG" target="_blank"><img src="assets/UMR.PNG" alt="" class="img-pl"></a>
                <figcaption>TOPOLOGÍA DEL EDIFICIO DE USOS MULTIPLES</figcaption>
            </figure>
        </p>
       </div>
       <h1 class="title">Cafeteria</h1>
       <hr>
       <div class="edi">
        <p class="img-centrado">
            <figure>
                <a href="assets/CR.PNG" target="_blank"><img src="assets/CR.PNG" alt="" class="img-pl"></a>
                <figcaption>TOPOLOGÍA DE LA CAFETERIA</figcaption>
            </figure>
        </p>
       </div>
    </div>
    
</body>
</html>