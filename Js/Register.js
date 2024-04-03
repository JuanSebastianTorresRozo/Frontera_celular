const botonRegistrar = document.getElementById('botonEnviar'); // Agrega comillas alrededor de 'botonEnviar'

botonRegistrar.addEventListener('click', mostrarFuncion);

function mostrarFuncion(boton) {
    alert("holaaa perraaaa");
}
const agente= document.getElementById('checkAgente');
const admin= document.getElementById('checkAdmin');
const cliente = document.getElementById('checkCliente');

agenteCheckbox.addEventListener("change", function() {
    mostrarOcultarInfo("ParteAgente", this.checked);
});
function mostrarOcultarInfo(elementId, mostrar) {
    var elemento = document.getElementById(elementId);
    if (mostrar) {
        elemento.style.display = "block";
    } else {
        elemento.style.display = "none";
    }
}
