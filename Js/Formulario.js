
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