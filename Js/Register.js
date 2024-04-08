var registroForm = document.getElementById("form");

// Agregar evento de envío al formulario
registroForm.addEventListener("submit", function(event) {
    event.preventDefault(); // Evitar el envío del formulario

    // Obtener los valores del formulario
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var correo = document.getElementById("email").value;
    var oficina = document.getElementById("oficina").value;
    var cargo = document.getElementById("cargo").value;
    var contraseña = document.getElementById("password").value;
    var confContraseña = document.getElementById("confPassword").value;
    var cliente = document.getElementById("checkCliente").checked;
    var agente = document.getElementById("checkAgente").checked;
    var admin = document.getElementById("checkAdmin").checked;
 // Verificar si la contraseña y la confirmación de contraseña coinciden
 if (contraseña !== confContraseña) {
    // Mostrar el símbolo de error
    document.getElementById("errorConfContraseña").textContent = "Las contraseñas no coinciden.";
    return; // Detener la ejecución del código
} else {
    // Ocultar el símbolo de error si las contraseñas coinciden
    document.getElementById("errorConfContraseña").textContent = "";
}
    // Guardar el usuario en el almacenamiento local
    var user = { Nombre: nombre, Apellido: apellido , Correo: correo , Oficina: oficina ,Cargo: cargo , Contraseña: contraseña , ConfContraseña: confContraseña , Cliente: cliente , Agente: agente , Admin:admin };
    localStorage.setItem("User", JSON.stringify(user));
    
    // Mostrar un mensaje de éxito
    alert("Usuario registrado exitosamente");
    window.location.href = "/index/formulario.html";
});