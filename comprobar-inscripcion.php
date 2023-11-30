<?php
//comprobar-inscripcion.php
//tratar de evitar la caché
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 2000 08:00:00 GMT");
	
//capturar variables y prevenir inyección SQL
$nombre= filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
$dni= filter_var($_POST['dni'], FILTER_SANITIZE_STRING);
$correo= filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
	
//conectar, insertar en BD y devolver información
require_once("conexion.php"); 
$sql = "INSERT INTO usuarios (nombre, dni, correo) VALUES ('$nombre', '$dni', '$correo')";
if (mysqli_query($conn, $sql)) {
//devolver a JS	
echo "Inscripción realizada correctamente
Nombre: $nombre
DNI: $dni
Correo: $correo";
} else {
echo "Error: <br>" . mysqli_error($conn);
}
mysqli_close($conn);		
?>