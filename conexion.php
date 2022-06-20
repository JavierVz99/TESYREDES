<?php



$servername = "bsmuaku4qtaz0rptiirp-mysql.services.clever-cloud.com";
$database = "bsmuaku4qtaz0rptiirp";
$username = "urejjvtayrp92wey";
$password = "YVPrG4Km9xeX0yLU1ri9";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
?>