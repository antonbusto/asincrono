<?php
if ($_REQUEST['empresa'] == "Chourizos Carballo" && $_REQUEST['localidad'] == "Lugo") {
  // Si el valor del parámetro 'empresa' es "Chourizos Carballo" y el valor del parámetro 'localidad' es "Lugo",
  // mostrar información sobre la empresa Chourizos Carballo
  echo "<p>Chourizos Carballo es una empresa del sector de la alimentación. Está especializada en porcino.
  La empresa está activa y tiene una elevada facturación</p>";
} else {
  // Si el valor de los parámetros no coincide con la empresa y la localidad esperadas, mostrar un mensaje de error
  echo "<p>No encuentro la empresa</p>";
}
?>