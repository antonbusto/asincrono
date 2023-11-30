<!DOCTYPE html>
<html lang="es">
<head>
<title>20 - API fech peticion GET a BD con PHP ejemplo 4 Bandas de Punk Rock</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
.container {
width: 750px;
}
#foto_banda, #logotipo_banda { 
display: none; 
}
</style>
</head>
<body>
<div class="container">
<h2>Punk Rock</h2>
<form action=""> 
<div class="form-group">
  <label for="banda">Nombre:</label>
  <select name="banda" onchange="cargar(this.value)" id="banda">
  <option value="">Selecciona una banda</option>
  <?php include("select-banda-punk-rock.php"); ?>
  </select>
</div>
</form>
<br>
<div class="row">
  <div class="col-7">
  <img class="img-fluid" src="" alt="foto_banda" id="foto_banda">
  <h2 id="nombre_banda"></h2>
  <p id="resumen_banda"></p>
  </div>
  <div class="col-5">
  <img class="img-fluid" src="" alt="Logotipo" id="logotipo_banda">
</div><!-- row -->
</div><!-- container -->
<script>
//muestra la información de la banda seleccionada en el select
function cargar(str) {
  fetch("getbanda-punk-rock.php?idbanda=" + str)
    .then(response => {
      if (!response.ok) {
        throw new Error('Error en la solicitud');
      }
      return response.json();
    })
    .then(array => {
      document.getElementById("foto_banda").style.display = "block";
      document.getElementById("logotipo_banda").style.display = "block";
      document.getElementById("foto_banda").src = "img/" + array[0].foto_banda;
      document.getElementById("logotipo_banda").src = "img/" + array[0].logotipo_banda;
      document.getElementById("nombre_banda").innerHTML = array[0].nombre_banda;
      document.getElementById("resumen_banda").innerHTML = array[0].resumen_banda;
    })
    .catch(error => {
      console.error(error);
    });
}

</script>
</body>
</html>