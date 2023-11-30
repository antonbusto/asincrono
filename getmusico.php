<?php
//guardar como getmusico.php
<?php
$musico = $_REQUEST['musico']; // Obtener el valor del parámetro 'musico' enviado en la solicitud

switch ($musico) {
  case "mozart":
    // Si el valor del parámetro es 'mozart', mostrar información sobre Wolfgang Amadeus Mozart
    echo "
      <h3>Wolfgang Amadeus Mozart</h3>
      <p>La flauta mágica – La reina de la noche</p>";
    break;
  case "beethoven":
    // Si el valor del parámetro es 'beethoven', mostrar información sobre Ludwig van Beethoven
    echo "
      <h3>Ludwig van Beethoven</h3>
      <p>Sonata para piano n.º 14 Claro de luna</p>";
    break;
  default:
    // Si el valor del parámetro no coincide con 'mozart' o 'beethoven', mostrar un mensaje de error
    echo "No encuentro el músico";
}
?>