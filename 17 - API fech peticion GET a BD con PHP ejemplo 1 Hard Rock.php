<!DOCTYPE html>
<html lang="es">
<head>
<!-- carpeta AJAX obtener datos desde BD utilizando PHP ejemplo 1 Hard Rock-->
<title>hard-rock</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
.container {
width: 700px;
}
</style>
</head>
<body>
<div class="container">
<div class="col-4"></div>
<h2>Hard Rock</h2>
<form action="" class="pt-3"> 
  <label for="banda">Nombre:</label>
  <select name="banda" onchange="mostrarAlbum(this.value)">
  <option value="">Selecciona una banda</option>
  <?php include("select-banda-hard-rock.php"); ?>
  </select>
</form>
<br>
<h4>Álbumes:</h4>
<div id="destino"></div>
</div><!-- container -->
<script>
function mostrarAlbum(str) {
  if (str == "") {
    document.getElementById("destino").innerHTML = "";
    return;
  }

  fetch("getalbum-hard-rock.php?idbanda=" + str)
    .then(response => {
      if (!response.ok) {
        throw new Error('Error en la solicitud');
      }
      return response.text();
    })
    .then(responseText => {
      document.getElementById("destino").innerHTML = responseText;
    })
    .catch(error => {
      console.error(error);
    });
}

</script>
</body>
</html>