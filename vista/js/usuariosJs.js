

//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
// LISTADO DE USUARIOS
//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////

      $(function(){ 
        listar()
        $('#searchUsuarios').keyup(function(){
          if( $(this).val() != ""){
            $("#tablaUsuarios #datosUsuariosLista tr").hide();
            $("#tablaUsuarios td:buscar('" + $(this).val() + "')").parent("tr").show();
          }else{
            $("#tablaUsuarios #datosUsuariosLista tr").show();
          }
        })

      })
      $.extend( $.expr[":"], {
          "buscar": function(elem, i, match, array){
              return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
          }
      })

 function listar(){
   var accion ="listar"
  $.ajax({
    dataType: 'json',
    url: 'vista/ajax/usuariosAjax.php',
    type: 'POST',
    data: "accion=" + accion 
  })
          .done(function(respuesta){
              if (respuesta.length > 0) {
                  var content = $("")
                  $(".mensaje").hide()
                  $("#tablaUsuarios").show()
                  $("#tablaUsuarios #datosUsuariosLista").html('')
                    $.each(respuesta, function(i, item) {
                      content = `<tr>
                                  <td>${ item.id }</td>
                                  <td>${ item.nombre }</td>
                                  <td>${ item.apellido }</td>
                                  <td>${ item.edad }</td>
                                  <td>${ item.departamento }</td>
                                  <td>${ item.cargo }</td>
                                  <td class="align-right">
                                    <button class="btn-flat opciones" onclick="consultarUsuarios(${ item.id })">
                                       <i class="fa fa-ellipsis-v"></i>                   
                                    </button>
                                  </td>   
                                </tr>`
                      $("#tablaUsuarios #datosUsuariosLista").append(content)
                    })
              }else{
                  $("#tablaUsuarios").hide()
                  $(".mensaje").show()
              }
          })
      }


$("#addUsuarios").on("click",function() {
 abrirFormulario("#usuariosFormulario","#usuariosLista");

ocultarBotones(["eli","mod","reg","add"],"Usuarios")
mostrarBotones(["reg"],"Usuarios")
  });

  $(".cerrarUsuarios").on("click",function() {
cerrarFormulario("#usuariosFormulario","#usuariosLista");
mostrarBotones(["eli","mod","reg","add"],"Usuarios")
  });


$("#btnLogin").on('click',function(){

  var accion ="login"
  $.ajax({

    dataType: 'json',
    url: 'vista/ajax/usuariosAjax.php',
    type: 'POST',
    data: $('#loginForm').serialize() + "&accion=" + accion 

  })    .done(function(respuesta){
   if (respuesta.operacion == false && respuesta.error == "1") {
    launch_toast("peligro","fas fa-user-slash","usuario inexistente",0)
  }
  if (respuesta.operacion == false && respuesta.error == "2") {
    launch_toast("negativo","fas fa-user-slash","usuario BLOQUEADO",0)
  }
  if (respuesta.operacion == false && respuesta.error == "3") {
    launch_toast("alerta","fas fa-key","Password incorrecta",0)
  }
  if (respuesta.operacion == true) {
launch_toast("exito","fas fa-user","REGISTRO REALIZADO!!",0)

setTimeout(function(){ 
  window.location = '?accion=inicio';
}, 3000);
}
})
})
 //////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
// REGISTAR USUARIOS
//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
function registrarUsuario() {
  var accion ="registrar";
  $.ajax({
    dataType: 'json',
    url: 'vista/ajax/usuariosAjax.php',
    type: 'POST',
    data: $('#usuariosForm').serialize() + "&accion=" + accion 
  })    
  .done(function(respuesta){
   if (respuesta.operacion == false && respuesta.error == "1") {
    launch_toast("peligro","fas fa-user-times","Usuario ya REGISTRADO!!!",0)
    }
    if (respuesta.operacion == true) {
 listar()
    $("#usuariosFormulario").addClass("oculto");
    $("#usuariosLista").removeClass("oculto");
    $("#addUsuarios").removeClass("oculto");
    $("#usuariosForm")[0].reset();
    launch_toast("exito","fas fa-user-times","REGISTRO REALIZADO!!",0)
  }
})
}
//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
// CONSULTAR USUARIOS
//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
function consultarUsuarios(a) {

/*revisarPermisos("Consultar Usuarios", function(resp) {
  if(resp)
    {
}else{
}
})
*/
  var accion ="consultar";
  $.ajax({ 
    dataType : 'json',
    url:'vista/ajax/usuariosAjax.php',
    type:'POST' , 
    data:{ "accion" : accion,"id" : a}
  })
  .done(function(respuesta){
     abrirFormulario("#usuariosFormulario","#usuariosLista");
     ocultarBotones(["eli","mod","reg","add"],"Usuarios")
mostrarBotones(["eli","mod"],"Usuarios")

  console.log(respuesta.nombre)
  $("#nombre").val(respuesta.nombre)
  $("#apellido").val(respuesta.apellido)
  $("#cedula").val(respuesta.id)


   $("#usuariosForm input, textarea").each(function(){                                 
     $(this).focus();
   });
   });

}

