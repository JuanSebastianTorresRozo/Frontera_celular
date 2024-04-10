<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/cst/Style/style.css" type="text/css">
        <link rel="stylesheet" href="/cst/Style/styleRegister.css" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Ruda:wght@400..900&display=swap" rel="stylesheet">
        <script src="/cst/Js/Register.js"></script>
        <title>CST</title>
    </head>
<body>
  <header>
    <div class="d-lg-flex col-lg-3 justify-content-lg-end">
        <ul class="navbar-nav col-lg-6 justify-content-lg-center" id="ulMenu">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/cst/Index/registro.php">Registrate</a>
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
  
  <section id="paginaprincipal">
      <div id="main-content">
        <form id="form" class="form">
          <div id="errorConfContraseña" class="error"></div>

            <div id="div-Input-user">
              <label for="" id="labelName">Nombres</label>
              <input type="text" class="form-control input-registro" id="nombre" placeholder="Nombres">
            </div>
            <div>
              <label for="" id="labelApellido">Apellidos</label>
              <input type="text" class="form-control input-registro" id="apellido" placeholder="Apellidos">
             </div>
            <div>
              <label for="" id="labelEmail">Correo</label>
              <input type="email" class="form-control input-registro" id="email" placeholder="Correo">
            </div>
            <div>
              <label for="" id="labelOficina">Oficina</label>
              <input type="text" class="form-control input-registro" id="oficina" placeholder="Oficina">
            </div>
            <div>
              <label for="" id="labelCargo">Cargo</label>
              <input type="text" class="form-control input-registro" id="cargo" placeholder="Cargo">
            </div>
            <div>
              <label for="" id="labelPassword">Contraseña</label>
              <input type="password" class="form-control input-registro" id="password" placeholder="Contraseña" minlength="6">
            </div>
            <div>
              <label for="" id="labelConfPassword">Confirmar Contraseña</label>
              <input type="password" class="form-control input-registro" id="confPassword" placeholder="Confirmar Contraseña" minlength="6">
            </div>
            <div class="checkbox-container">
              <input type="checkbox" class="form-control input-registro" id="checkCliente">
              <label for="checkCliente" id="labelCliente">Cliente</label>
          
              <input type="checkbox" class="form-control input-registro" id="checkAgente">
              <label for="checkAgente" id="labelAgente">Agente</label>
          
              <input type="checkbox" class="form-control input-registro" id="checkAdmin">
              <label for="checkAdmin" id="labelAdministrador">Administrador</label>
          </div>
            <div class="div-btn">
              <button type="submit" class="btn btn-secondary btn-enviar" id="botonRegistrar">Registrar</button>
            </div>
          </form>
      </div>
  </section>
  <script src="/cst/Js/Register.js"></script>
</body>
</html>
