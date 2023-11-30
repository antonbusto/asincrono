<?php
//getartistas-punk.php
    include("conexion.php");
	$idbanda = $_GET['idbanda'];
	$sql = "SELECT * FROM artista WHERE idbanda=$idbanda";
	$result = mysqli_query($conn, $sql);
    $artistas = array();
    //obtener array con todos los resultados
    $artistas = mysqli_fetch_all($result,MYSQLI_ASSOC);
	//codificar a JSON
    $artistasJSON = json_encode($artistas);
    //imprimir JSON  
    echo $artistasJSON;
    mysqli_close($conn);
?>