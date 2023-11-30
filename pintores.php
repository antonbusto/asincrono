<?php
    //guardar como pintores.php
	// Retrasamos 3 segundos la ejecución de esta página PHP para simular retraso en la carga del servidor
	sleep(3);
	echo "
	<div class='card' style='width:650px'>
	<img class='card-img-top' src='van-gogh.jpg' alt='Van Gogh'>
	<div class='card-body'>
    <h4 class='card-title'>Vincent van Gogh</h4>
    <p class='card-text'>30 de marzo de 1853 - 29 de julio de 1890</p>
    <a href='biografia.php?id=25' class='btn btn-primary'>Biografía</a>
	</div>
	</div>";
?>