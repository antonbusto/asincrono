<?php
//getalbum-hard-rock.php
// Incluye el archivo de conexión 
include("conexion.php");
// Obtiene el parámetro 'idbanda' enviado mediante GET
$idbanda = $_GET['idbanda'];
// Construye la consulta SQL para obtener los nombres de los álbumes asociados a la banda
$sql = "SELECT nombre FROM album WHERE idbanda = $idbanda";
// Ejecuta la consulta SQL
$result = mysqli_query($conn, $sql);
// Verifica si hay resultados obtenidos de la consulta
if (mysqli_num_rows($result) > 0) { 
    // Itera sobre cada fila de resultados obtenidos
    while($row = mysqli_fetch_array($result)) {
        // Imprime el nombre del álbum en una estructura de tarjeta Boostsrap
        echo "
        <div class='card' style='width:400px'>
        <div class='card-body'>" . $row['nombre'] . "</div>
        </div>";
    }
}
?>