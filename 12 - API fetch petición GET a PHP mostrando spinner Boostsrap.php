<!DOCTYPE html>
<html lang="es">
<head>
<title>12 - API fetch petición GET a PHP mostrando spinner Boostsrap</title>
<meta charset="UTF-8">
<meta nombre="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
.container {
width: 800px;
}
.spinner-border {
width: 4rem; 
height: 4rem;
}
</style>
</head>
<body>
<div class="container">
<div id="grupo"></div>
<button type="button"  class="btn btn-primary" onclick="cargar()">Cargar</button>
<script>
function cargar() {
  // Mostrar el spinner
  addSpinner();

  // Realizar la solicitud utilizando Fetch
  fetch("kiss.php")
    .then(response => {
      // Verificar el estado de la respuesta
      if (response.ok) {
        return response.text(); // Obtener la respuesta como texto
      } else {
        throw new Error("Error en la solicitud");
      }
    })
    .then(data => {
      // Enviar el texto utilizando el DOM
      document.getElementById("grupo").innerHTML = data;
      // La solicitud ha llegado a su fin, eliminar el precargador
      removeSpinner();
    })
    .catch(error => {
      console.error("Error en la solicitud:", error);
    });
}

function addSpinner() {
  // Si el Spinner aún no existe, agregar uno
  if (!document.querySelector('#spinner')) {
    let spinnerHTML = "<div class='spinner-border text-primary' role='status'></div>";
    // Seleccionar el elemento con el id 'grupo' y agregar el HTML del spinner
    document.getElementById('grupo').innerHTML = spinnerHTML;
  }
}

function removeSpinner() {
  // Seleccionar el elemento del precargador y eliminarlo de la página
  let spinner = document.querySelector('.spinner-border');
  if (spinner) {
    spinner.remove();
  }
}

</script>
</div> 
</body>
</html>