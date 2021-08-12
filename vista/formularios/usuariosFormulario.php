<div class="row " style=" margin: 0%;">
<div class="fixed-action-btn" id="addUsuarios" style="bottom: 10%; margin: 0%;">
  <a href="#" id="" class=" green  btn-floating btn-large pulse  tooltipped" data-position="left"  data-delay="50" data-tooltip="Añadir Registro de">
    <i class="fas fa-plus"></i>
  </a>
</div>
</div>
<div class="row " style=" margin: 0%;">
  <div class="col s12">
    <div class="card oculto formulario" id="usuariosFormulario">
      <div class="card-content ">
        <div class="right-align">
          <button type="button" class="btn-flat cerrarUsuarios cerrarForm center valign-wrapper tooltipped" data-position="left"  data-delay="50" data-tooltip="cerrar formulario">
            <i style="font-size: 22pt;" class=" modal-close fas fa-times"></i>
          </button>
          
        </div>
        <form id="usuariosForm">
          <span class="card-title">
            <h3>Informacion de Usuarios</h3>
          </span>


          <div class="row">
            <div class="input-field col s4">
              <i class="fas fa-id-card prefix"></i>
              <input data-position="bottom" data-tooltip="Informacion" id="nombre" type="text" name="nombre" class="tooltipped validate">
              <label data-success="Correcto..."  for="nombre">nombre</label>
            </div>

            <div class="input-field col s4">
              <i class="fas fa-id-card prefix"></i>
              <input data-position="bottom" data-tooltip="Informacion" id="apellido" type="text" name="apellido" class="tooltipped validate">
              <label data-success="Correcto..."  for="apellido">apellido</label>
            </div>

            <div class="input-field col s4">
              <i class="fas fa-id-card prefix"></i>
              <input data-position="bottom" data-tooltip="Informacion" id="cedula" type="text" name="cedula" class="tooltipped validate">
              <label data-success="Correcto..."  for="cedula">cedula</label>
            </div>
          </div>

         
          <div class="row">
            <div class="input-field col s4">
              <i class="fa fa-phone-alt prefix"></i>
              <input id="telefono" type="tel" name="telefono" class="validate">
              <label for="telefono">telefono</label>
            </div>
<div class="input-field col s6">
              <input id="correo" type="text" name="correo">
              <label for="correo">correo</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <textarea id="direccion" class="materialize-textarea" name="direccion" data-length="120"></textarea>
              <label for="direccion">direccion</label>
            </div>
          </div>

          <div class="row">
<div class="input-field col s6">
              <input id="pw" type="password" name="pw">
              <label for="pw">Contraseña</label>
            </div>
          </div>


        

      </form>
      </div>
      <div class="card-action right-align">

        <button type="button"  id="eliUsuarios" class="btn red darken-1 modal-trigger" data-target="delConfUsuarios">Eliminar <i class="fas fa-trash-alt"></i></button>

        <button id="modUsuarios" class="btn orange darken-1 modal-trigger" data-target="modConfUsuarios">Actualizar <i class="fas fa-pen"></i></button>

        <button id="regUsuarios" name="accion" value="registrar" onclick="registrarUsuario();" class="btn green darken-1" >Guardar <i class="fas fa-save"></i></button>

        <button class="cerrarUsuarios  modal-close waves-effect waves-light btn-flat ">Cerrar <i class="fas fa-times"></i></button>

      </div>
    </div>
  </div>
</div>


<!-- CONFIRMACION MODIFICAR REGISTRO -->
<div id="modConfUsuarios" class="modal">
  <div class="modal-content center">
      <h4>Atención</h4>
       <h5>Está Seguro Que Desea <b>Modificar</b> el registro</h5>
      <span class="black-text">Una Vez Hecho Esto se modificara la informacion del mismo.</span>
  </div>
  <div class="modal-footer">
    <div class='row'>
      <div class='input-field col s6'>
        <button type='button' onclick="" class=' col s12 btn btn-large waves-effect green darken-1'>MODIFICAR <i class="fas fa-check"></i></button>
      </div> 
      <div class='input-field col s6'>
        <button type='button' class='modal-close col s12 btn btn-large waves-effect red darken-4'>CANCELAR <i class="fas fa-times"></i></button>
      </div>
    </div>
  </div>
</div>



<!-- CONFIRMACION ELIMINAR REGISTRO -->

<div id="delConfUsuarios" class="modal">
  <div class="modal-content center">
      <h4>Atención</h4>
      <h5>Está Seguro Que Desea <b>Eliminar</b> el registro</h5>
      <span class="black-text">Una Vez Hecho Esto perdera la informacion del mismo.</span>
  </div>
  <div class="modal-footer">
    <div class='row'>
      <div class='input-field col s6'>
        <button type='button' onclick="" class=' col s12 btn btn-large waves-effect green darken-1'>ELIMINAR <i class="fas fa-check"></i></button>
      </div> 
      <div class='input-field col s6'>
        <button type='button' name='btn_login' class='modal-close col s12 btn btn-large waves-effect red darken-4'>CANCELAR <i class="fas fa-times"></i></button>
      </div>
    </div>
  </div>
</div>
