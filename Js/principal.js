var registroForm = document.getElementById("form");

// Agregar evento de envío al formulario
registroForm.addEventListener("submit", function(event) {
    event.preventDefault(); // Evitar el envío del formulario

    // Obtener los valores del formulario
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Guardar el usuario en el almacenamiento local
    var user = { username: username, password: password };
    localStorage.setItem("user", JSON.stringify(user));

    // Mostrar un mensaje de éxito
    alert("Usuario registrado exitosamente");
});