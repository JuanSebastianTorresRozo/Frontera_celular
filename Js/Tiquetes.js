document.addEventListener("DOMContentLoaded", function() {
    const lis = document.querySelectorAll('.li');
    const bloques = document.querySelectorAll('.bloque');

    // Iterar sobre los elementos de la lista
    lis.forEach((li, i) => {
        li.addEventListener('click', () => {
            // Remover la clase 'activo' de todos los elementos de la lista y los bloques
            lis.forEach((li, index) => {
                li.classList.remove('activo');
                bloques[index].classList.remove('activo');
            });

            // Agregar la clase 'activo' al elemento de la lista y al bloque correspondiente
            li.classList.add('activo');
            bloques[i].classList.add('activo');

            // Si el elemento de la lista seleccionado es "Tiquetes abiertos", mostramos los tiquetes abiertos
            if (li.textContent.trim() === 'Tiquetes abiertos') {
                // Limpiar el contenido del bloque
                bloques[i].innerHTML = '';

                // Obtener los datos del tiquete correspondiente desde el almacenamiento local
                const formularioData = JSON.parse(localStorage.getItem("FormularioData"));
                if (formularioData) {
                    // Crear un elemento de imagen
                    const imagenElemento = document.createElement('img');
                    imagenElemento.src = formularioData.Imagen; // Asignar la URL de la imagen al atributo src

                    // Agregar la imagen al bloque
                    bloques[i].appendChild(imagenElemento);
                    
                    // Agregar el resto de la información del tiquete al bloque
                    bloques[i].innerHTML += `
                        
                        <p>Asunto: ${formularioData.Asunto}</p>
                        <p>Descripción: ${formularioData.Descripcion}</p>
                        <p>Prioridad: ${formularioData.Prioridad}</p>
                        <p>Estado: ${formularioData.Estado}</p>
                        <p>Fecha de asignación: ${fechaActual}</p>
                        <p>Fecha de ejecución: ${formularioData.FechaEjecucion}</p>
                        <p>Diagnóstico: ${formularioData.Diagnostico}</p>
                        <p>Solución: ${formularioData.Solucion}</p>
                    `;
                } else {
                    // Si no hay datos en el almacenamiento local, mostrar un mensaje
                    bloques[i].innerHTML = '<p>No hay tiquetes abiertos.</p>';
                }
            }
        }); 
    }); 

    // Obtener la fecha actual
    const fechaActual = new Date().toISOString().slice(0, 10);

    // Establecer la fecha actual como el valor del campo de fecha de asignación
    document.getElementById('FechaAsignacion').value = fechaActual;
}); 
