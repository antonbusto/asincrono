<?php
//select-banda-punk-rock.php
require ("conexion.php");
$sql= "SELECT * FROM banda"; 
$result= mysqli_query($conn, $sql) or die (mysqli_error());

while($row = mysqli_fetch_array($result)){
echo "<option value='".$row['idbanda']."'>".$row['nombre_banda']."</option>\n";
}
mysqli_close($conn);
?>