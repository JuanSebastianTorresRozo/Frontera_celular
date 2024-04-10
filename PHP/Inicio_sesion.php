<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/cst/Style/style.css" type="text/css">
    <link rel="stylesheet" href="/cst/Style/styleLogin.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Ruda:wght@400..900&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <header>
        <div class="d-lg-flex col-lg-3 justify-content-lg-end">
            <ul class="navbar-nav col-lg-6 justify-content-lg-center" id="ulMenu">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/cst/PHP/registro.php">Registrate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cst/PHP/Inicio_sesion.php">Ingresa</a>
                </li>
            </ul>
        </div>
    </header>
    <section id="menulateral">
        <div id="sidebar">
            <a href="/cst/PHP/index.php">
                <img src="/cst/Imagenes/logo_frontera-01-e1669829308160.png" alt="Logo">
            </a>
            <ul>
                <li><a href="/cst/PHP/formulario.php">Creacion de tiquetes</a></li>
                <li><a href="/cst/PHP/Tiquets.php">Mis tiquetes</a></li>
                <li id="TiquetesPendientes"><a href="/">Tiquetes pendientes</a></li>
                
            </ul>
        </div>
    </section>
    <div id="errorConfContraseña" class="error"></div>
    <section id="paginaprincipal">
        <div id="main-content">
            <form id="loginForm" class="form">
                <div>
                  <label for="" id="labelEmail">Correo</label>
                  <input type="text" class="form-control input-registro" id="email" placeholder="Correo">
                </div>
                <div>
                  <label for="" id="labelPassword">Contraseña</label>
                  <input type="password" class="form-control input-registro" id="password" placeholder="Contraseña">
                </div>
                <div class="div-btn">
                  <button type="submit" class="btn btn-secondary btn-enviar" id="botonLogin">Login</button>
                </div>
              </form>
        </div>
    </section>
    <script src="/cst/Js/InicioSesion.js"></script>
    
</body>
</html>