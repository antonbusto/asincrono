<?php
$array = array(
"<h2>AC/DC</h2>",
"<img class='img-fluid' src='acdc.jpg'>",
"<p>AC/DC es una banda de hard rock británica-australiana, formada en 1973 en Australia por los hermanos escoceses Malcolm Young y Angus Young. <br>Son famosas sus actuaciones en vivo, resultando vibrantes y exultantes espectáculos de primer orden. Mucho de ello se debe al extravagante estilo de su guitarrista principal y símbolo visual, Angus Young, quien asume el rol de guitarrista principal durante los conciertos, gracias a sus dinámicos y adrenalínicos despliegues escénicos uniformado de colegial callejero.​ <br>En 1974, la llegada del cantante Bon Scott se convertiría en una pieza clave del éxito del grupo. Su presencia en escena, lo convirtió en uno de los personajes más carismáticos de la historia del hard rock. La formación se estabilizaría con Cliff Williams (bajo) y Phil Rudd (baterista).</p>");
$arrayJSON = json_encode($array);
echo $arrayJSON;
?>