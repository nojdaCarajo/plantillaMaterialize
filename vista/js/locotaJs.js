

//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
// LISTADO DE USUARIOS
//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
function buscarLOCOTA(consulta) {
    var accion ="consulta"
  $.ajax({
    beforeSend: function() {
     //$("#datosLOCOTALista").html("<img src="vista/img/gifDeCarga.gif">");
   },

   url: "vista/ajax/LOCOTAAjax.php",
   type: "POST",
   dataType: "html",
   data: $("#consultaLOCOTA").serialize() + "&accion=" + accion ,
   success: function (respuesta) {
     $("#datosLOCOTALista").html(respuesta);
   }

 })    
}

$(document).on("keyup","#consultaLOCOTA", function(){
  var valor = $(this).val();
  if (valor != "") {
    buscarLOCOTA(valor);
  }else{
    buscarLOCOTA();
  }
});

$(buscarLOCOTA());





$("#addLOCOTA").on("click",function() {
 abrirFormulario("#locotaFormulario","#locotaLista");
  $("#addLOCOTA").addClass("oculto");

  });

  $(".cerrarLOCOTA").on("click",function() {
cerrarFormulario("#locotaFormulario","#locotaLista");
    $("#addLOCOTA").removeClass("oculto");
  });



