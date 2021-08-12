

//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
// LISTADO DE USUARIOS
//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
function buscarDemo(consulta) {
    var accion ="consulta"
  $.ajax({
    beforeSend: function() {
     //$("#datosDemoLista").html("<img src="vista/img/gifDeCarga.gif">");
   },

   url: "vista/ajax/DemoAjax.php",
   type: "POST",
   dataType: "html",
   data: $("#consultaDemo").serialize() + "&accion=" + accion ,
   success: function (respuesta) {
     $("#datosDemoLista").html(respuesta);
   }

 })    
}

$(document).on("keyup","#consultaDemo", function(){
  var valor = $(this).val();
  if (valor != "") {
    buscarDemo(valor);
  }else{
    buscarDemo();
  }
});

$(buscarDemo());





$("#addDemo").on("click",function() {
 abrirFormulario("#demoFormulario","#demoLista");
  $("#addDemo").addClass("oculto");

  });

  $(".cerrarDemo").on("click",function() {
cerrarFormulario("#demoFormulario","#demoLista");
    $("#addDemo").removeClass("oculto");
  });



