<?php
//select-banda-heavy-metal.php
require ("conexion.php");
$sql= "SELECT * FROM banda"; 
$result= mysqli_query($conn, $sql) or die (mysqli_error());

while($row = mysqli_fetch_array($result)){
echo "<option value='".$row['id']."'>".$row['nombre']."</option>\n";
}
mysqli_close($conn);
?>