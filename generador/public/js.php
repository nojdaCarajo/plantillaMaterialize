<?php 

$Documento='

//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
// LISTADO DE USUARIOS
//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
function buscar'.ucwords($datosArchivo).'(consulta) {
    var accion ="consulta"
  $.ajax({
    beforeSend: function() {
     //$("#datos'.ucwords($datosArchivo).'Lista").html("<img src="vista/img/gifDeCarga.gif">");
   },

   url: "vista/ajax/'.ucwords($datosArchivo).'Ajax.php",
   type: "POST",
   dataType: "html",
   data: $("#consulta'.ucwords($datosArchivo).'").serialize() + "&accion=" + accion ,
   success: function (respuesta) {
     $("#datos'.ucwords($datosArchivo).'Lista").html(respuesta);
   }

 })    
}

$(document).on("keyup","#consulta'.ucwords($datosArchivo).'", function(){
  var valor = $(this).val();
  if (valor != "") {
    buscar'.ucwords($datosArchivo).'(valor);
  }else{
    buscar'.ucwords($datosArchivo).'();
  }
});

$(buscar'.ucwords($datosArchivo).'());





$("#add'.ucwords($datosArchivo).'").on("click",function() {
 abrirFormulario("#'.strtolower($datosArchivo).'Formulario","#'.strtolower($datosArchivo).'Lista");
  $("#add'.ucwords($datosArchivo).'").addClass("oculto");

  });

  $(".cerrar'.ucwords($datosArchivo).'").on("click",function() {
cerrarFormulario("#'.strtolower($datosArchivo).'Formulario","#'.strtolower($datosArchivo).'Lista");
    $("#add'.ucwords($datosArchivo).'").removeClass("oculto");
  });



';

 ?>