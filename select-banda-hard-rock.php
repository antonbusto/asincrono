<?php
//select-banda-hard-rock.php
// consulta a la Base de Datos
require ("conexion.php");
$sql= "SELECT * FROM banda"; 
$result= mysqli_query($conn, $sql) or die (mysqli_error());
// select dinámico para utilizar en el html
while($row = mysqli_fetch_array($result)){
echo "<option value='".$row['id']."'>".$row['nombre']."</option>\n";
}
mysqli_close($conn);
?>