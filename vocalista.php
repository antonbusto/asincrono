<?php
// vocalista.php
// Definir un array asociativo en PHP con la información del vocalista
$vocalista = array(
  'foto' => 'freddie.jpg',
  'nombre' => 'Freddie Mercury',
  'grupo' => 'Queen'
);

// Convertir el array en una cadena JSON
$arrayJSON = json_encode($vocalista);

// Verificar si ocurrió algún error durante la codificación JSON
if ($arrayJSON === false) {
  echo 'Error al generar la cadena JSON';
} else {
  // Imprimir la cadena JSON
  echo $arrayJSON;
}
?>
