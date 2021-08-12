

//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
// LISTADO DE USUARIOS
//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
function buscarEmpleados(consulta) {
    var accion ="consulta"
  $.ajax({
    beforeSend: function() {
     //$("#datosEmpleadosLista").html("<img src="vista/img/gifDeCarga.gif">");
   },

   url: "vista/ajax/EmpleadosAjax.php",
   type: "POST",
   dataType: "html",
   data: $("#consultaEmpleados").serialize() + "&accion=" + accion ,
   success: function (respuesta) {
     $("#datosEmpleadosLista").html(respuesta);
   }

 })    
}

$(document).on("keyup","#consultaEmpleados", function(){
  var valor = $(this).val();
  if (valor != "") {
    buscarEmpleados(valor);
  }else{
    buscarEmpleados();
  }
});

$(buscarEmpleados());





$("#addEmpleados").on("click",function() {
 abrirFormulario("#empleadosFormulario","#empleadosLista");
  $("#addEmpleados").addClass("oculto");

  });

  $(".cerrarEmpleados").on("click",function() {
cerrarFormulario("#empleadosFormulario","#empleadosLista");
    $("#addEmpleados").removeClass("oculto");
  });



