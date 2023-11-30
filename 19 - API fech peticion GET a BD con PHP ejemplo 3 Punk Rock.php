<!DOCTYPE html>
<html lang="es">
<head>
<title>19 - API fech peticion GET a BD con PHP ejemplo 3 Punk Rock</title>
<meta charset="UTF-8">
<meta nombre="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- presentar el contenido centrado utilizando Boostrap Flex -->
<h2 id="titular" class="d-flex justify-content-center p-3">Artistas Punk Rock</h2>
<div id="destino" class="d-flex justify-content-center p-3">
<img src="img/punk-rock.jpg" alt="Punk Rock">
</div>
<div class="d-flex justify-content-center p-3 m-3">
<button type="button"  class="btn btn-primary" onclick="Ramones()" id="ramones">Ramones</button>
<button type="button"  class="btn btn-primary" onclick="SexPistols(2)" id="sex-pistols">Sex Pistols</button>
</div>
<script>
function cargarArtistas(str) {
  let html = ""; 
  
  fetch("getartistas-punk.php?idbanda=" + str)
    .then(response => {
      if (!response.ok) {
        throw new Error('Error en la solicitud');
      }
      return response.json();
    })
    .then(artista => {
      for (let i in artista) {
        html += "<div class='card' style='width:200px'><img class='card-img-top' src='img/" + artista[i].foto_artista + "'><div class='card-body'><h5 class='card-title'>" + artista[i].nombre_artista +"</h5><p class='card-text'>"+ artista[i].puesto_artista +"</p></div></div>";
      }
      document.getElementById("destino").innerHTML = html;
    })
    .catch(error => {
      console.error(error);
    });
}

function Ramones() {
  document.getElementById("titular").innerHTML = "Ramones";
  cargarArtistas(1);
}

function SexPistols() {
  document.getElementById("titular").innerHTML = "Sex Pistols";
  cargarArtistas(2);
}

</script>
</body>
</html>