<div id="usuariosLista" style="padding: 0px; margin:0px;" class="listado">
  <div class="center">
    <h4 style="padding: 0px; margin:0px;">Listado de Usuarios</h4>
  </div>
  <div class="row" style="padding: 0px; margin:0px;">
    <div class="col s12">
      <div class="card ">
        <div class=" white-text" style=" margin:0px;">
          <nav class="blue darken-4">
            <div class="nav-wrapper">
              <form id="formularioBusquedaUsuarios">
                <div class="input-field">
                  <input id="searchUsuarios" type="search" name="consultaUsuarios" required>
                  <label class="label-icon" for="search">
                    <i class="fas fa-search"></i>
                  </label>
                </div>
              </form>
            </div>
          </nav>
        </div>
        <div class="card-content lista" style="height: 50vh; overflow: auto;" >
          <table id="tablaUsuarios" class="bordered responsive-table">
            <thead>
              <tr>
                <th >
                  ID:
                </th>
                <th >
                  Nombre
                </th>
                <th >
                  Apellidos
                </th>
                <th>
                  Edad
                </th>
                <th >
                  Departamento
                </th>
                <th>
                  Cargo
                </th>
                <th>
                  Opciones
                </th>
              </tr>
            </thead>
            <tbody id="datosUsuariosLista" class="responsive-table">
            </tbody>
          </table> 
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <div class="card ">

        <div class="center-align cyan tarjeta">
          <img src="public/img/avatar/user05.png" alt="" class="responsive-img " width="90">
          <p class="titulo-tarjeta">DOCENTES</p>
        </div>

        <div class="card-content">
          <p>
            En este apartado se encuentra la gestión de Docentes, las actividades dentro del mismo son: Registrar Docente, Modificar Datos del docente, Eliminar Docente, y restablecer la contraseña de un docente en específico.
          </p>
        </div>

        <div class="card-action">
          <div class="row">
            <a href="index.php?controlador=docentes&amp;actividad=index" class="btn btn-lg cyan col s12 waves-effect">Ir al Módulo</a>   
          </div>      
        </div>

      </div> -->