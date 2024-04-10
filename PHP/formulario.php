<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/cst/Style/styleFormulario.css" type="text/css">
    <link rel="stylesheet" href="/cst/Style/style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Ruda:wght@400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="/cst/Js/Formulario.js"></script>

    
    <title>Formulario</title>
</head>
<body>
    <header>
        <div class="d-lg-flex col-lg-3 justify-content-lg-end">
            <ul class="navbar-nav col-lg-6 justify-content-lg-center" id="ulMenu">
                <li class="nav-item" id="notificaciones">
                    <a class="nav-link" aria-current="page" href="#">
                        <i class="fas fa-bell fa-lg fa-shake"></i>
                    </a>
                    <div id="panel-notificaciones" class="panel-notificaciones">
                        <h3>Notificaciones</h3>
                        <ul id="lista-notificaciones">
                            <!-- Las notificaciones se agregarán aquí dinámicamente -->
                        </ul>
                    </div>
                </li>
                
                               
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
                <li id="TiquetesPendientes"> <a href="/">Tiquetes pendientes</a></li> 
               
            </ul>
        </div>
    </section>
   
    <section id="paginaprincipal" >
        <h1>FORMULARIO</h1>
        <div id="main-content">
            <form action="ObtencionDatos.php" method="POST" enctype="multipart/form-data" id="formTiquetes" class="form">
                
                <div id="div-Input-user">
                    <label for="imagenProblema" id="labelImagen">Imagen</label>
                    <input type="file" accept="image/*" class="form-control input-registro" id="imagenProblema" name="imagenProblema" onchange="mostrarVistaPrevia()">
                </div>
                
                
                <div id="vista-previa"></div>
                
                <div>
                    <label for="" id="labelAsunto">Asunto</label>
                    <textarea  id="Asunto" class="form-control input-registro" name="Asunto" ></textarea>
                </div>
                <div>
                  <label for="" id="labelDescripcion">Descripción</label>
                  <textarea id="Descripcion" class="form-control input-registro" name="Descripcion" ></textarea>
                </div>
                <div>
                    <label for="prioridad" id="labelPrioridad">Prioridad</label>
                    <select id="prioridad" class="form-control input-registro" name="prioridad">
                        <option value="1">1 Baja</option>
                        <option value="2">2 Normal</option>
                        <option value="3">3 Alta</option>
                    </select>
                </div>
                <div class="ParteAgente">
               <!-- <div>
                    <label for="selectAgente">Seleccionar Agente:</label>
                    <select id="selectAgente" required>
                        Las opciones se agregarán dinámicamente aquí 
                    </select>
                </div>-->
                
                <div>
                  <label for="" id="labelEstado">Estado</label>
                  <textarea id="Estado" class="form-control input-registro" name="Estado"></textarea>
                </div>
                 
                  <label for="" id="labelFechaAsignacion">Fecha de asignacion</label>
                  <input type="date" class="form-control input-registro" id="FechaAsignacion" name="fecha_asignacion" >
                
                  <label for="" id="labelFechaEjecucion">Fecha de ejecución</label>
                  <input type="date" class="form-control input-registro" id="FechaEjecucion" name="fecha_ejecucion">
               
                    <label for="" id="labelDiagnostico">Diagnostico</label>
                    <textarea  id="Diagnostico" class="form-control input-registro" name="Diagnostico" ></textarea>
                
                    <label for="" id="labelSolucion">Solución</label>
                    <textarea id="Solucion"class="form-control input-registro" name="Solucion" ></textarea>
                </div>

                <div class="div-btn">
                  <button type="submit" class="btn btn-secondary btn-enviar" id="botonEnviar" name="Enviar">Enviar</button>
                </div>
                
              </form>
              <?php
                include('ObtencionDatos.php');

            ?>
        </div>
    </section>
</body>
</html>
