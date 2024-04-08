
document.addEventListener('DOMContentLoaded', function() {

    // Formulario donde se debería mostrar el usuario registrado como agente
    var formularioTiquetes = document.getElementById("formTiquetes");
  
    // Agregar evento de envío al formulario de tiquetes
    formularioTiquetes.addEventListener("submit", function(event) {
      event.preventDefault(); // Evitar el envío del formulario
  
      // Obtener el nombre de la imagen
      var imagenInput = document.getElementById("imagenProblema");
      var imagenNombre = imagenInput.files[0].name; 
  
      // Obtener los demás valores del formulario de tiquetes
      var asunto = document.getElementById("Asunto").value;
      var descripcion = document.getElementById("Descripcion").value;
      var prioridad = document.getElementById("prioridad").value;
      var estado = "abierto";
      var fechaAsignacion = document.getElementById("FechaAsignacion").value;
      var fechaEjecucion = document.getElementById("FechaEjecucion").value;
      var diagnostico = document.getElementById("Diagnostico").value;
      var solucion = document.getElementById("Solucion").value;
  
      // Guardar los datos del tiquete en el almacenamiento local
      var formularioData = {
        Imagen: imagenNombre,
        Asunto: asunto,
        Descripcion: descripcion,
        Prioridad: prioridad,
        Estado: estado,
        FechaAsignacion: fechaAsignacion,
        FechaEjecucion: fechaEjecucion,
        Diagnostico: diagnostico,
        Solucion: solucion
      };
      localStorage.setItem("FormularioData", JSON.stringify(formularioData));
  
      // Recuperar los datos del usuario del almacenamiento local
      var usuarioRecuperado = JSON.parse(localStorage.getItem("User"));
  
      // Verificar si el usuario recuperado es un agente
      if (usuarioRecuperado.Agente) {
        // Cargar las opciones de agentes en el select
        cargarOpcionesAgentes();
  
        // Mostrar los datos del usuario agente
        document.getElementById('selectAgente').innerHTML = `${usuarioRecuperado.Nombre}`;
        document.getElementById('selectAgente').innerHTML = `${usuarioRecuperado.Apellido}`;
      } else {
        document.getElementById('selectAgente').innerHTML('No es un agente')
      }
  
      // Mostrar un mensaje de éxito
      alert("Datos del tiquete guardados exitosamente");
    });
   // Agregar evento de cambio al input de la imagen
   var imagenInput = document.getElementById("imagenProblema");
   imagenInput.addEventListener("change", mostrarVistaPrevia);

 function cargarOpcionesAgentes() {
    // Check if there are any agents stored in local storage
    var agentes = JSON.parse(localStorage.getItem("agentes"));
  
    if (!agentes) {
      // If no agents are found in local storage, create an empty array
      agentes = [];
    }
  
    // Populate the select dropdown with agent options
    agentes.forEach(function(agente) {
      var option = document.createElement('option');
      option.value = agente.id;
      option.textContent = agente.nombre + ' ' + agente.apellido;
      document.getElementById('selectAgente').appendChild(option);
    });
  }
});
    // Funcion para mostrar la imagen previo a la subida del archivo
    function mostrarVistaPrevia() {
        var archivo = document.getElementById('imagenProblema').files[0];
        var vistaPrevia = document.getElementById('vista-previa');
      
        if (archivo) {
          var lector = new FileReader();
      
          lector.onload = function(evento) {
            vistaPrevia.innerHTML = '<img src="' + evento.target.result + '" alt="Vista previa de la imagen">';
          };
      
          lector.readAsDataURL(archivo);
        } else {
          vistaPrevia.innerHTML = 'No se ha seleccionado ninguna imagen';
        }
    }    