
$(document).on('click', '#agregar', function(){

	var html=`<div  id="iter">
	<label>Nombre del campo</label>
	<input type="text" name="nombreCampo[]">

	<label>Numero de columnas</label>
	<input type="number" name="columnasCampo[]">
	

	<label>Tipo de Campo</label>							
	<select name="tipoCampo[]">
	<option selected disabled>Seleccione</option>
	<option value="text">texto</option>
	<option value="number">numero</option>
	<option value="textarea">text area</option>
	<option value="file">file</option>
	<option value="select">select</option>
	<option value="checkbox">CheckBox</option>
  <option value="radio">Radio</option>
	</select>


	<label><span>fila individual?</span></label>
	<input type="checkbox" name="individual[]">
	<label>Eliminar</label>
	<button type="button" name="remove" class="btn removeSelect">+</button>		
	<hr>
	</div>

	`;

	$('.merwebo').append(html);




});
$(document).on('click', '.removeSelect', function(){
	$(this).closest('#iter').remove();
});

$("#clase").attr('disabled',true)
$("#controlador").attr("disabled",true)
$("#vista").attr("disabled",true)
$("#js").attr("disabled",true)
$("#ajax").attr("disabled",true)
$("#lista").attr("disabled",true)
$("#formulario").attr("disabled",true)
$("#fullPackCheck").prop('checked',true);
$("#grupalCheck").addClass('oculto')





$("#fullPackCheck").change(function() {

	if ($("#fullPackCheck").is(':checked')) {

			$("#fullPack").attr("disabled",false)

			$("#grupalCheck").addClass('oculto')

$("#grupalCheck input").each(function() {

	$(this).attr("disabled",true);
});




	}else{
		$("#fullPack").attr("disabled",true)
		
		$("#grupalCheck").removeClass('oculto')

		$("#grupalCheck :input[type='checkbox']").each(function() {
	$(this).attr("disabled",false);
});

		$("#grupalCheck :input[type='text']").each(function() {
	$(this).attr("disabled",true);
});

}
})



$("#claseCheck").change(function() {
	if ($("#claseCheck").is(':checked')) {
		$("#clase").attr("disabled",false)
	}else{
		$("#clase").attr("disabled",true)
	// body...
}
});

$("#formPer").change(function() {
	if ($("#formPer").is(':checked')) {

		$("#perForm").removeClass('oculto')
	}else{
		$("#perForm").addClass('oculto')
	// body...
}
})




$("#controladorCheck").change(function() {
	if ($("#controladorCheck").is(':checked')) {
		$("#controlador").attr("disabled",false)
	}else{
		$("#controlador").attr("disabled",true)
	// body...
}
})
$("#vistaCheck").change(function() {
	if ($("#vistaCheck").is(':checked')) {
		$("#vista").attr("disabled",false)
	}else{
		$("#vista").attr("disabled",true)
	// body...
}
})
$("#jsCheck").change(function() {
	if ($("#jsCheck").is(':checked')) {
		$("#js").attr("disabled",false)
	}else{
		$("#js").attr("disabled",true)
	// body...
}
})
$("#ajaxCheck").change(function() {
	if ($("#ajaxCheck").is(':checked')) {
		$("#ajax").attr("disabled",false)
	}else{
		$("#ajax").attr("disabled",true)
	// body...
}
})
$("#listaCheck").change(function() {
	if ($("#listaCheck").is(':checked')) {
		$("#lista").attr("disabled",false)
	}else{
		$("#lista").attr("disabled",true)
	// body...
}
})
$("#formularioCheck").change(function() {
	if ($("#formularioCheck").is(':checked')) {
		$("#formulario").attr("disabled",false)
		$("#personForm").attr("disabled",false)

	}else{
		$("#formulario").attr("disabled",true)
		$("#personForm").attr("disabled",true)
		$("#descripForm").addClass("oculto")
		$("#descripForm input").each(function(){                      
			$(this).attr('disabled',true);



		});
		$("#descripForm input").each(function(){                      
			$(this).attr('disabled',true);



		});

}

})


$("#personForm").change(function() {

	if ($("#personForm").is(':checked')) {

		$("#descripForm").removeClass("oculto")
		$("#descripForm input").each(function(){                      
			$(this).attr('disabled',false);



		});

		$("#descripForm select").each(function(){                      
			$(this).attr('disabled',false);



		});				

	}else{
		$("#descripForm").addClass("oculto")
		$("#descripForm input").each(function(){                      
			$(this).attr('disabled',true);



		});
		$("#descripForm input").each(function(){                      
			$(this).attr('disabled',true);



		});

	}
})

/*

//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
//PROCESO DE LOGUEO
//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
$("#btnLogin").on('click',function(){
  var cedula=$("#cedula").val();
  var password=$("#password").val();

  var datos = new FormData();
  datos.append("accion","login");
  datos.append("cedLogin", cedula);
  datos.append("pwLogin", password);

  $.ajax({ 
    dataType : 'json',
    url:'vista/ajax/usuariosAjax.php',
    method:"POST",
    data:datos,
    cache: false,
    contentType:false,
    processData:false
  })                      
  .done(function(respuesta){
    if (respuesta.operacion == false && respuesta.error == "1") {

     $("#notificacion").html(`<div id='toast' style='background-color: #F51E05;'>
      <div id='img' style='background-color: #E9665F;'>
      <i class='fas fa-user-times'></i>
      </div>
      <div id='desc'>
      Usuario INEXISTENTE!!!
      </div>
      </div>`)

     launch_toast()

   }
   if (respuesta.operacion == false && respuesta.error == "2") {

     $("#notificacion").html(`<div id='toast' style='background-color: #000;'>
      <div id='img' style='background-color: #5B5B5B;'>
      <i class='fas fa-user-slash'></i>
      </div>
      <div id='desc'>
      Usuario Bloqueado por mmgvo!!
      </div>
      </div>`)

     launch_toast()

   }
   if (respuesta.operacion == false && respuesta.error == "3") {

     $("#notificacion").html(`<div id='toast' style='background-color: #FF8000;'>
      <div id='img' style='background-color: #FFA448;'>
      <i class='fas fa-user-minus'></i>
      </div>
      <div id='desc'>
      Contraseña Erronea!!
      </div>
      </div>`)
     launch_toast()

   }

   if (respuesta.operacion == true ){
var bitacora = registrarBitacora("Sistema", "Ingreso al sistema")
    $("#notificacion").html(`<div id='toast' style='background-color: #35BB26;'>
      <div id='img' style='background-color: #86EE88;'>
      <i class='fas fa-user-check'></i>
      </div>
      <div id='desc'>
      Bienvenido al Sistema!!
      </div>
      </div>`)
    launch_toast()


    setTimeout(function(){ 
      window.location = 'index.php?accion=inicio';
    }, 3000);

  }
})
})

//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
// LISTADO DE USUARIOS
//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
function buscarUsuario(consulta) {
  $.ajax({
    beforeSend: function() {
     $('#datosUsuariosLista').html('<img src="vista/img/gifDeCarga.gif">');
   },

   url: 'vista/ajax/usuariosConsultaAjax.php',
   type: 'POST',
   dataType: 'html',
   data: $('#consultaUsuarios').serialize(),
   success: function (respuesta) {
     $('#datosUsuariosLista').html(respuesta);
   }

 })    
}

$(document).on('keyup','#consultaUsuarios', function(){
  var valor = $(this).val();
  if (valor != "") {
    buscarUsuario(valor);
  }else{
    buscarUsuario();
  }
});

$(buscarUsuario());


//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
// APERTURA DEL MODAL DE REGISTRO
//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////



$(document).ready(function(){
  $("#addUser").on("click",function() {
    $("#usuarioForm")[0].reset();
    $("#divPassword").removeClass('oculto');
    $("#divEstado").addClass('oculto');

    $("#eliUsuario").addClass('oculto');
 $("#modUsuario").addClass('oculto');
  $("#regUsuario").addClass('oculto');
       $("#regUsuario").removeClass('oculto');



     $("#permisologia").removeClass('oculto');
    $("#permisologia").addClass('oculto');
         $('#password').attr('disabled',false)
    $('#repPassword').attr('disabled',false)
       $("#permisos select").each(function(){                      
          $(this).attr('disabled',false);
              


 });

    var datos = new FormData();
    datos.append("permiso","Registrar Usuarios");
    $.ajax({ 
      dataType : 'json',
      url:'vista/ajax/permisosAjax.php',
      method:"POST",
      data:datos,
      cache: false,
      contentType:false,
      processData:false
    })                      
    .done(function(respuesta){
     if (respuesta.permiso == false) {

       $("#notificacion").html(`<div id='toast' style='background-color: #F51E05;'>
        <div id='img' style='background-color: #E9665F;'>
        <i class='fas fa-user-times'></i>
        </div>
        <div id='desc'>
        Permiso Denegado...
        </div>
        </div>`)
       launch_toast()
     }
     if (respuesta.permiso == true) {
       $("#userModal").modal('open');
     }

   })


  });


});






//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
// CONFIRMACION DE REGISTRO
//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
$("#regUsuario").on('click',function(){

  var pw=$("#password").val();
  var pwR=$("#repPassword").val();
  if (pw===pwR) {
    registrarUsuario(); 
  }else{
   $("#notificacion").html(`<div id='toast' style='background-color: #F51E05;'>
    <div id='img' style='background-color: #E9665F;'>
    <i class='fas fa-user-times'></i>
    </div>
    <div id='desc'>
    Las contraseña no coinciden
    </div>
    </div>`)

   launch_toast()
 }
                    
})


//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
// FUNCION DE REGISTRO DE USUARIO
//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////


$("#modUsuario").on('click',function(){

  
    var datos = new FormData();
    datos.append("permiso","Modificar Usuario");
    $.ajax({ 
      dataType : 'json',
      url:'vista/ajax/permisosAjax.php',
      method:"POST",
      data:datos,
      cache: false,
      contentType:false,
      processData:false
    })                      
    .done(function(respuesta){
     if (respuesta.permiso == false) {

       $("#notificacion").html(`<div id='toast' style='background-color: #F51E05;'>
        <div id='img' style='background-color: #E9665F;'>
        <i class='fas fa-user-times'></i>
        </div>
        <div id='desc'>
        Permiso Denegado...
        </div>
        </div>`)
       launch_toast()
     }
     if (respuesta.permiso == true) {
        modificarUsuario()
     }

   })

                     
})


//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
// FUNCION DE REGISTRO DE USUARIO
//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
function registrarUsuario() {
  var accion ="registrar";
  $.ajax({

    dataType: 'json',
    url: 'vista/ajax/usuariosAjax.php',
    type: 'POST',
    data: $('#usuarioForm').serialize() + "&accion=" + accion 

  })    .done(function(respuesta){
   if (respuesta.operacion == false && respuesta.error == "1") {

     $("#notificacion").html(`<div id='toast' style='background-color: #F51E05;'>
      <div id='img' style='background-color: #E9665F;'>
      <i class='fas fa-user-times'></i>
      </div>
      <div id='desc'>
      Usuario ya REGISTRADO!!!
      </div>
      </div>`)
     launch_toast()

   }
   if (respuesta.operacion == true) {
    var bitacora = registrarBitacora("Sistema", "Registro un usuario")
    $("#notificacion").html(`<div id='toast' style='background-color: #35BB26;'>
      <div id='img' style='background-color: #86EE88;'>
      <i class='fas fa-user-check'></i>
      </div>
      <div id='desc'>
      REGISTRO REALIZADO!!
      </div>
      </div>`)
    launch_toast()
    $("#userModal").modal('close');
  }


})
}

//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
// FUNCION DE MODIFICAR DE USUARIO
//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////


function modificarUsuario() {
  var accion ="modificar";
  $.ajax({

    dataType: 'json',
    url: 'vista/ajax/usuariosAjax.php',
    type: 'POST',
    data: $('#usuarioForm').serialize() + "&accion=" + accion 

  })    .done(function(respuesta){
   if (respuesta.operacion == false && respuesta.error == "1") {

     $("#notificacion").html(`<div id='toast' style='background-color: #F51E05;'>
      <div id='img' style='background-color: #E9665F;'>
      <i class='fas fa-user-times'></i>
      </div>
      <div id='desc'>
      Usuario ya REGISTRADO!!!
      </div>
      </div>`)
     launch_toast()

   }
   if (respuesta.operacion == true) {
    var bitacora = registrarBitacora("Usuarios", "Modifico los datos de un Usuario")
    $("#notificacion").html(`<div id='toast' style='background-color: #35BB26;'>
      <div id='img' style='background-color: #86EE88;'>
      <i class='fas fa-user-check'></i>
      </div>
      <div id='desc'>
      REGISTRO REALIZADO!!
      </div>
      </div>`)
    launch_toast()
    $("#userModal").modal('close');
  }


})
}



//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
// FUNCION DE CONSULTA DE USUARIO
//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////



function consultarUsuario(a) {
   $("#permisologia").addClass('oculto');
     $("#permisologia").removeClass('oculto');
    
      $("#eliUsuario").addClass('oculto');
 $("#modUsuario").addClass('oculto');
  $("#regUsuario").addClass('oculto');
       $("#eliUsuario").removeClass('oculto');
       $("#modUsuario").removeClass('oculto');
   $("#switche").prop("checked", false);



var accion ="consultar";
  $("#userModal").modal('open');
  $.ajax({ 
    dataType : 'json',
    url:'vista/ajax/usuariosAjax.php',
    type:'POST' , 
    data:{ "accion" : accion,"consulta" : a}
  })
  .done(function(respuesta){
 $(".usuarioForm #nombre").val(respuesta.datos.nombre);
    $('#divPassword').addClass('oculto')
    $('#eliminar').addClass('oculto')
    $('#divEstado').removeClass('oculto')
    $('#iduser').attr('disabled',false)
     $('#password').attr('disabled',true)
    $('#repPassword').attr('disabled',true)
     $("#iduser").val(respuesta.datos.iduser);
    $("#nombre").val(respuesta.datos.nombre);
    $("#apellido").val(respuesta.datos.apellido);
    $("#telefono").val(respuesta.datos.telefono);
    $("#direccion").val(respuesta.datos.direccion);
   $("#telefono").val(respuesta.datos.telefono);
   $("#correo").val(respuesta.datos.correo);
   $("#cedula").val(respuesta.datos.cedula);                   
   $("#rol").val(respuesta.datos.idrol)
   $("#estatus").val(respuesta.datos.status)
var permisosArreglo=[];

for (var i = 0; i < respuesta.permisos.length; i++) {
   permisosArreglo[i] =respuesta.permisos[i].idpermiso
}
       $("#permisos select").each(function(){        
                         $(this).val(permisosArreglo)
                         $(this).attr('disabled',true);
              


 });
var bitacora = registrarBitacora("Usuarios", "Consulto a un usuario")
 })
}



//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
// FUNCIONES SIEMPRE ACTIVAS
//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////

$(document).ready(function(){
  $("#rol").change(function(){
    var rol = $("#rol").val();
if (rol==1) {
  permisos=[1,2,3,4,5,6,7,8,9,10,11,12,13]
}
if (rol==2) {
  permisos=[1,2,3,5,6,7,8,9,10,11,12]
}

if (rol==3) {
 
  permisos=[2,5,6,7,9]
}

       $("#permisos select").each(function(){        
                         $(this).val(permisos)
              


 });

});


});

*/