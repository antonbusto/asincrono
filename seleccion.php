<?php
//guardar como seleccion.php
//clase para crear los objetos
class Jugador {
    public $nombre;
    public $posicion;
}
//crear arrays paralelos, con la misma longitud y correspondencia para los nombres y las posiciones	
$nombres = ['David de Gea', 'Pau Torres', 'Marcos Llorente', 'Sergio Busquets', 'Gerard Moreno'];
$posiciones = ['Portero', 'Defensa', 'Centrocampista', 'Centrocampista', 'Delantero'];
//creamos el array que guardará los objetos
$jugadores = array();
//crear los objetos jugador y añadirlos al array
   for ($i = 0; $i < 5; $i++) {
      $jugador = new Jugador();
      $jugador->nombre = $nombres[$i];
      $jugador->posicion = $posiciones[$i];
      array_push($jugadores, $jugador);
    }
//convertir a formato JSON e imprimir
$ficheroJSON = json_encode($jugadores);
echo $ficheroJSON; //string JSON con array de objetos
?>