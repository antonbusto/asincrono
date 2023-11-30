<?php
//getalbum-heavy-metal.php
require ("conexion.php");
$sql= "SELECT * FROM album"; 
$result= mysqli_query($conn,$sql) or die (mysqli_error());
?>
<option value="">Selecciona un Álbum:</option>
<?php
while($row = mysqli_fetch_array($result)){	
		if($row['idbanda'] == $_GET['q']){
			echo "<option value='".$row['id']."'>".$row['nombre']."</option>\n";;
		}
	}
mysqli_close($conn);
?>