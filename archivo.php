<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  // Verificar si se ha enviado el formulario
  if (isset($_GET['nombre']) && isset($_GET['correo']) && isset($_GET['telefono'])) {
    // Obtener los valores enviados a través del formulario
    $nombre = $_GET['nombre'];
    $correo = $_GET['correo'];
    $telefono = $_GET['telefono'];

    // Obtener el valor del campo oculto "metodo"
    $metodo = $_GET['metodo'];

    // Mostrar un mensaje de éxito
    echo "¡Gracias por enviar el formulario, $nombre!";
  } else {
    // Si el formulario no ha sido enviado, mostrar un mensaje de error
    echo "Por favor, completa todos los campos del formulario.";
  }
} else {
  // Si el método no es GET, puedes mostrar un mensaje de error o realizar otras acciones
  echo "Error: Método no válido para acceder a esta página.";
}
?>


