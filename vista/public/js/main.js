
// Toda la totalidad de las funciones Siempre estan activas
$(document).ready(function(){

// zebra es el contenedor final de la pagina, contiene la informacion de la pagina
$("#zebra").append(`
 <center style="color: white;"> © {fecha} {acronimo del sistema} | {NOMBRE COMPLETO DEL SISTEMA}</center>
  `);
// al hacer click en el boton "top" el menu se contraera y expandira
$("#top").on("click",function() {

  var boton =$("#top").val();
  if (boton == 0) {

   $('#alfa').removeClass('expandido');
   $('#alfa').addClass('contraido');
   $("#top").val(1);
 }
 else if(boton == 1)
 {
  $('#alfa').removeClass('contraido');
  $('#alfa').addClass('expandido');
  $("#top").val(0);
} 
});
// despliega la ayuda de usuario
$(".userHelp").on("click",function()
{
  $("#modal-info").modal('open');
});

// al hacer click nos lleva ala configuracion de usario
$(".userConfig").val(0);
 $("#configTool").show()
$(".userConfig").on("click",function() {

     var btnConfig =$(".userConfig").val();
  if (btnConfig == 0) {

   $("#configTool").hide()
   $(".userConfig").val(1);
 }
 else if(btnConfig == 1)
 {
 $("#configTool").show();
  $(".userConfig").val(0);
} 

});

// despliega/oculta las notificaciones
$(".userNotifi").on("click",function(){
  var estado =$(".userNotifi").val();
  if (estado == 0)
  {
    $('#info-cont').removeClass('oculto');
    $(".userNotifi").val(1);
  }

  else if(estado == 1)
  {
    $('#info-cont').addClass('oculto');
    $(".userNotifi").val(0);
  } 
});
});


// la funcion de los toast o mensajes de alerta
function launch_toast(style,icono,mensaje,necro) {
if (necro==1) {
  font="#000000";
}else{
  font="#ffffff";

}

switch (style) {
  case 'default':
  var banner ="#EDEDED";
  var cuerpo ="#F7F7F7";
    break;
   
  case 'peligro':
   var banner ="#E9665F";
  var cuerpo ="#F51E05";
    break;

  case 'exito':
     var banner ="#86EE88";
  var cuerpo ="#35BB26";
    break;

  case 'alerta':
   var banner ="#FFA448";
  var cuerpo ="#FF8000";
    break;

case 'negativo':
   var banner ="#5B5B5B";
  var cuerpo ="#000";
    break;

}

   $("#notificacion").html(`<div id='toast' style='background-color: `+cuerpo+`; color:`+font+`;'>
        <div id='img' style='background-color: `+banner+`; color:`+font+`;'>
        <i class='`+icono+`'></i>
        </div>
        <div id='desc' style='color:`+font+`;'>
        `+mensaje+`
        </div>
        </div>`)
  var x = document.getElementById("toast")
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
}

  $(document).ready(function(){
    $('.modal').modal();
  });

   $(document).ready(function(){
    $('.tooltipped').tooltip();
  });

     $(document).ready(function(){
      M.Toast.dismissAll();
    $('.datepicker').datepicker(
      {
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year
    format: 'ddd, dd-mm-yyyy' });
     $('.dropdown-trigger').dropdown();
  });

function cerrarSession() {

$("#power-off").modal('close');
  
launch_toast("exito","fas fa-user-times","Hasta luego, vuelva pronto",0)
setTimeout(function(){ 
      window.location = 'index.php?accion=login';
    }, 3000);
  }

/*$(".userConfig").on("click",function() {
  $("#configTool").addClass("oculto");
})
*/
function abrirFormulario(formulario,listado) {
 
$(formulario).show();
 $(listado).hide();
 $(formulario+"Form").each(function(){
   $(this)[0].reset();
 });


}
function cerrarFormulario(formulario,listado) {
  $(listado).show();
 $(formulario).hide();
 $(formulario+"Form").each(function(){
   $(this)[0].reset();
 });
}


function mostrarBotones(array,modulo) {
 $.each(array, function(i, item){
  $("#"+item+modulo).show();
 });
}

function ocultarBotones(array,modulo) {
 $.each(array, function(i, item){
   $("#"+item+modulo).hide();
 });
}

function merrigan() {

  if ($("#modoOscuroSwicth").is(':checked')){
   $(".fa-moon").css({"color": "#35dde9"});
   $("#bravo").addClass("infoDark");
   $("#charlie").addClass("menuDark");
   $("#delta").addClass("deltaDark");
   $("#zebra").addClass("zebraDark");
   $("body").addClass("darkBody");
   $(".listado h4").css({"color": "#fff"});
    $(".lista").addClass("menuDark");
     $(".lista").css({"color": "#fff"});
      $(".opciones").css({"color": "#fff"});
$(".formulario").addClass("formDark");

$(".formulario input, .formulario i,.formulario h3").each(function() {
$(this).css({"color": "#fff"})
})

  }else{ 
       // alert("modoOscuro Desactivado") 
        $(".fa-moon").css({"color": ""}); 
         $("#bravo").removeClass("infoDark");
         $("#charlie").removeClass("menuDark");
   $("#delta").removeClass("deltaDark");
   $("#zebra").removeClass("zebraDark");
   $("body").removeClass("darkBody");
   $(".listado h4").css({"color": ""});
    $(".lista").removeClass("menuDark");
     $(".lista").css({"color": ""});
      $(".opciones").css({"color": ""});
      $(".formulario").removeClass("formDark");
$(".formulario input, .formulario i,.formulario h3").each(function() {
$(this).css({"color": ""})
})
  }
}

$("#modoOscuroSwicth").on("change",function() {
  merrigan()
})
merrigan()


// apartir de 700 width

 function ajustePantalla() {
    
    var pantalla =$(window).width(); 

     if (pantalla<700) {

$("#infoToolLite").show()
$("#infoTool").hide()
  $('#alfa').removeClass('expandido');
  $('#alfa').addClass('contraido');
      }else{
          $('#alfa').removeClass('contraido');
  $('#alfa').addClass('expandido');
       $("#infoToolLite").hide()
       $("#infoTool").show()

      }
  }

ajustePantalla()
   $(window).on('resize', function(){
    ajustePantalla()
  
   })



$(function(){
    //oculta al hacer click fuera del elemnto (formulario)
    
    $(document).on("click",function(e) {
       var container = $("#toolMenuAyuda");       
            if (!container.is(e.target) && container.has(e.target).length === 0) { 
            //Se ha pulsado en cualquier lado fuera de los elementos contenidos en la variable container
               container.slideUp();               
            }
     });

    //Muestra elento (formulario)
    $("#userHelp").on("click", function(event){
        $("#toolMenuAyuda").slideToggle();
        event.stopImmediatePropagation();
    });
});


$(function(){
    //oculta al hacer click fuera del elemnto (formulario)
    
    $(document).on("click",function(e) {
       var container = $("#toolMenuConfig");       
            if (!container.is(e.target) && container.has(e.target).length === 0) { 
            //Se ha pulsado en cualquier lado fuera de los elementos contenidos en la variable container
               container.slideUp();               
            }
     });

    //Muestra elento (formulario)
    $("#userConfig").on("click", function(event){
        $("#toolMenuConfig").slideToggle();
        event.stopImmediatePropagation();
    });
});



$(function(){
    //oculta al hacer click fuera del elemnto (formulario)
    
    $(document).on("click",function(e) {
       var container = $("#toolMenuNotificacion");       
            if (!container.is(e.target) && container.has(e.target).length === 0) { 
            //Se ha pulsado en cualquier lado fuera de los elementos contenidos en la variable container
               container.slideUp();               
            }
     });

    //Muestra elento (formulario)
    $("#userNoti").on("click", function(event){
        $("#toolMenuNotificacion").slideToggle();
        event.stopImmediatePropagation();
    });
});



    $("#selectorTall").on("click", function(event){
 var selectoreszx =$("#selectorTall").val();
  if (selectoreszx == 0) {

   $("#selectorTall").val(1);
    $("#calin").css({"transform": "rotate(90deg)"});
 }
 else if(selectoreszx == 1)
 {
 $("#calin").css({"transform": "rotate(0deg)"});
  $("#selectorTall").val(0);
} 
    // $("#calin").css({"transform": "rotate(90deg)"});


        $("#opcionesTall").slideToggle();
        event.stopImmediatePropagation();
    });


// $(function(){
    //oculta al hacer click fuera del elemnto (formulario)
    
    $(document).on("click",function(e) {
      
       var container = $("#opcionesTall");       
            if (!container.is(e.target) && container.has(e.target).length === 0) { 
            //Se ha pulsado en cualquier lado fuera de los elementos contenidos en la variable container
               
               container.slideUp(); 

               $("#calin").css({"transform": "rotate(0deg)"});           
            }
     });

    //Muestra elento (formulario)
    $("#selectorTall").val(0);

// });


/*var b = document.querySelector("#userHelp");

b.setAttribute("ripaltam", "helloButton");
b.setAttribute("disabled", "");*/
