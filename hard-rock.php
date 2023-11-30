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
//mostrar álbumes de la banda seleccionada en el select
function mostrarAlbum(str) {
  if (str == "") {
    document.getElementById("destino").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
   //si todo bien
  if (this.readyState == 4 && this.status == 200) {
    //enviar la respuesta Ajax por DOM	  
    document.getElementById("destino").innerHTML = this.responseText;
    }
  }
  //especificar método, archivo y variable
  xhttp.open("GET", "getalbum-hard-rock.php?idbanda="+str, true);
  xhttp.send();
}
</script>
</body>
</html>