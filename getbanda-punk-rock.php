<?php
//getbanda-punk-rock.php
include("conexion.php");
$idbanda = $_GET['idbanda'];
$sql = "SELECT * FROM banda WHERE idbanda = $idbanda";
$result = mysqli_query($conn, $sql);
//obtener un array con el resultado
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
//convertir a formato JSON
$arrayJSON = json_encode($rows);
//imprimir
echo $arrayJSON;
?>