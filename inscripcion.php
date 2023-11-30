<?php
//inscripcion.php
$nombre = $_POST['nombre']; 
$dni = $_POST['dni'];
$correo = $_POST['correo'];
include("conexion.php"); 
$sql = "INSERT INTO usuarios (nombre, dni, correo) VALUES ('$nombre', '$dni', '$correo')";
if (mysqli_query($conn, $sql)) {
//texto que devolvemos a la función AJAX
echo "Inscripción realizada correctamente";
}	
?>