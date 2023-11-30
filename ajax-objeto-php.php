<?php
//ajax-objeto-php.php
/* new stdClass() es una clase predefinida en php, que no tiene ningún atributo ni métodos. La podemos usar cuando queremos crear un objeto genérico al que después podemos agregar propiedades*/
// Crear objeto persona
$persona = new stdClass();
$persona->nombre = "Amy Winehouse";
$persona->puesto = "Cantante y compositora";
$persona->genero = "Mujer";
$persona->nacimiento = "14 de septiembre de 1983";
$persona->fallecimiento = "23 de julio de 2011";
$persona->foto = "amy.jpg";

// Convertir el objeto a JSON
$personaJSON = json_encode($persona);

// Verificar si la codificación JSON tuvo éxito
if ($personaJSON !== false) {
    // Imprimir la cadena JSON resultante
    echo $personaJSON;
} else {
    // Ocurrió un error al codificar el objeto en JSON
    echo "Error al codificar el objeto en JSON";
}
?>