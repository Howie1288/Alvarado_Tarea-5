
  document.getElementById("miFormulario").addEventListener("submit", function(event) {
    event.preventDefault(); // Evitar que se envíe el formulario de manera convencional

    var formulario = document.getElementById("miFormulario");
    var metodo = formulario.method;

    mostrarMetodo(metodo);
  });

  function mostrarMetodo(metodo) {
    alert("El método utilizado es: " + metodo);
  }



