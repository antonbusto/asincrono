<!DOCTYPE html>
<html lang="es">
<head>
<title>18 - API fech peticion GET a BD con PHP ejemplo 2 Heavy Metal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
.container {
	width:800px;
}
</style>
</head>
<body>
<div class="container">
<h4>Heavy Metal</h4>
<form action="temas.php" class="mt-3">
  <div class="row">
    <div class="col">
    <select class="form-select"  onchange="mostrarAlbumes(this.value)" id="banda" name="banda">
    <option selected>Selecciona una Banda:</option>
    <?php include("select-banda-heavy-metal.php") ?>
    </select>
    </div>
    <div class="col">
      <select class="form-select" id="album" name="album" disabled>
      </select>
    </div>
	<div class="col">
      <input type="submit" class="btn btn-primary" value="Consultar temas">
    </div>
  </div>
</form>
<div id="info"></div>
</div>
<script>
/*  Función que se encarga de cargar y mostrar los álbumes de heavy metal según el parámetro especificado */
function mostrarAlbumes(str) {
  fetch("getalbum-heavy-metal.php?q=" + str)
    .then(response => {
      if (!response.ok) {
        throw new Error('Error en la solicitud');
      }
      return response.text();
    })
    .then(responseText => {
      document.getElementById("album").disabled = false;
      document.getElementById("album").innerHTML = responseText;
    })
    .catch(error => {
      console.error(error);
    });
}
</script>
</body>
</html>