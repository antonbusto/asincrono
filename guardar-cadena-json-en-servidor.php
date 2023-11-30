<?php
//guardar-cadena-json-en-servidor.php
    // convertir el string JSON en una variable de PHP
    $data = json_decode($_POST['entrada']); 
    // fichero donde se guardará JSON
    $fichero = "entrada.json";
    // Abrir el archivo
    $fd = fopen($fichero,"w");
    // Escribir la cadena json
    fputs($fd,json_encode($data));
    // cerrar el archivo
    fclose($fd); 
    //mandar la cadena con la respuesta
    echo json_encode($data);
?>