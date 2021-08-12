

//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
// LISTADO DE USUARIOS
//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
function buscarLuchonas(consulta) {
    var accion ="consulta"
  $.ajax({
    beforeSend: function() {
     //$("#datosLuchonasLista").html("<img src="vista/img/gifDeCarga.gif">");
   },

   url: "vista/ajax/LuchonasAjax.php",
   type: "POST",
   dataType: "html",
   data: $("#consultaLuchonas").serialize() + "&accion=" + accion ,
   success: function (respuesta) {
     $("#datosLuchonasLista").html(respuesta);
   }

 })    
}

$(document).on("keyup","#consultaLuchonas", function(){
  var valor = $(this).val();
  if (valor != "") {
    buscarLuchonas(valor);
  }else{
    buscarLuchonas();
  }
});

$(buscarLuchonas());





$("#addLuchonas").on("click",function() {
 abrirFormulario("#luchonasFormulario","#luchonasLista");
  $("#addLuchonas").addClass("oculto");

  });

  $(".cerrarLuchonas").on("click",function() {
cerrarFormulario("#luchonasFormulario","#luchonasLista");
    $("#addLuchonas").removeClass("oculto");
  });



