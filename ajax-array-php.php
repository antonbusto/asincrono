<?php
//ajax-array-php.php
// Se crea un array en PHP con información sobre Kurt Cobain
$array = array(
	"<img class='img-fluid' src='cobain.jpg' alt='Cobain'>",
    "<h1>Kurt Cobain</h1>",
    "<p>Kurt Donald Cobain (Aberdeen, Washington; 20 de febrero de 1967-Seattle, Washington; 5 de abril de 1994) fue un cantante, músico y compositor estadounidense, conocido por haber sido el cantante, guitarrista y principal compositor de la banda grunge de rock alternativo Nirvana.</p>
	<p>Existen algunas teorías que afirman que su muerte no fue un suicidio sino un homicidio por parte de en ese entonces su esposa Courtney Love; las razones fueron financieras, ellos se iban a divorciar y Courtney ya no gozaría de la gran fortuna de su esposo. Lo que lleva a creer en esto fue que después de la muerte de Kurt un testigo apareció diciendo que Courtney le habría ofrecido dinero (50 000 dólares) para asesinar al cantante (el testigo fue encontrado muerto semanas después)</p>	"
); 
// Se convierte el array en formato JSON utilizando la función json_encode
$arrayJSON = json_encode($array);
// Se imprime el resultado, que es un objeto JSON con la información de Kurt Cobain
echo $arrayJSON;
?>