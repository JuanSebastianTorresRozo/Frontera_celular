document.addEventListener('DOMContentLoaded', function() {
    var loginForm = document.getElementById("loginForm");

    loginForm.addEventListener("submit", function(event) {
        event.preventDefault(); // Evitar el envío del formulario

        // Obtener los valores del formulario
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;

        // Aquí puedes realizar la autenticación, por ejemplo, enviar los datos a un servidor para verificar las credenciales

        // Por ahora, vamos a simular una autenticación básica con credenciales estáticas
        if (email === "usuario@example.com" && password === "contraseña") {
            // Usuario autenticado correctamente
            alert("Inicio de sesión exitoso");
            // Redirigir al usuario a la página de inicio
            window.location.href = "/index.html";
        } // Verificar si la contraseña y la confirmación de contraseña coinciden
        if (contraseña !== confContraseña) {
           // Mostrar el símbolo de error
           document.getElementById("errorConfContraseña").textContent = "El correo o la contraseña son invalidas";
           return; // Detener la ejecución del código
       } else {
           // Ocultar el símbolo de error si las contraseñas coinciden
           document.getElementById("errorConfContraseña").textContent = "";
       }
    });
    // Verificar si hay un nombre de usuario en el almacenamiento local al cargar la página
var nombreUsuario = localStorage.getItem("nombreUsuario");
if (nombreUsuario) {
    // Mostrar "Hola + nombre de usuario" en el encabezado
    var saludoUsuario = document.createElement("span");
    saludoUsuario.textContent = "Hola " + nombreUsuario;
    saludoUsuario.classList.add("saludo-usuario");
    document.getElementById("ulMenu").appendChild(saludoUsuario);   
 }
});


