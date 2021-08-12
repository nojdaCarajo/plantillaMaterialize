
		M.AutoInit(); // inicia las mierdas de materialize
//$("#fullPack").attr('disabled',false);
		$(document).ready(function(){
			// desactiva TODOS los inputs del formulario desplegable
			$(".selectores :input[type='text'],.selectores :input[type='checkbox']").each(function(){    
				$(this).attr('disabled',true);
			});

			// activa y desactiva cada opcion del formulario desplegable
			$(".selectores :input[type='checkbox']").on("click",function () {
				var check =$(this).val();
				if ($(this).is(':checked')) {
					$(".selectores #"+check+"").focus();
					$(".selectores #"+check+"").attr("disabled",false)
				}else{
					$(".selectores #"+check+"").attr("disabled",true)	
				}

			})


// despliega y contrae el formulario desplegable

			$("#fullPackCheck").prop('checked',true);
			$("#fullPackCheck").on("click",function() {

				if ($(this).is(':checked')) {
				// activado
				$("#fullPack").attr('disabled',false);

				$(".selectores :input[type='text'],.selectores :input[type='checkbox']").each(function(){    
				$(this).attr('disabled',true);
			});

$('.especial').css({"height":"0px","overflow":"hidden"});

}
else
{
	$(".selectores :input[type='checkbox']").each(function(){    
		$(this).attr('disabled',false);
	});
	$('.especial').css({"height":"100vh","overflow":"auto"});
	$("#fullPack").attr('disabled',true);
} 
});
$(".personalForm input,select").each(function(){    
	$(this).attr('disabled',true);


});
			$("#personalFormCheck").on("click",function() {

				if ($(this).is(':checked')) {
// activado
$('.personalForm').css({"height":"100vh","overflow":"auto"});


$(".personalForm :input,.personalForm select").each(function(){    
	$(this).attr('disabled',false);

$(document).ready(function(){
			$('select').formSelect();
		})
});
}
else
{
$(".personalForm :input,.personalForm select").each(function(){    
	$(this).attr('disabled',true);


});
	$('.personalForm').css({"height":"0px","overflow":"hidden"});
} 
});

			$(".personalSettersGetters :input[type='text'],select").attr('disabled',true);
			$("#personalSettersGettersCheck").on("click",function() {

				if ($(this).is(':checked')) {
// activado
$('.personalSettersGetters').css({"height":"70vh","overflow":"auto","border": "1px solid #0f0f0f"});
			$(".personalSettersGetters :input[type='text'],select").attr('disabled',false);
				$(document).ready(function(){
			$('select').formSelect();
		})
}
else
{

	$('.personalSettersGetters').css({"height":"0px","overflow":"hidden","border": "0px"});
	

			$(".personalSettersGetters :input[type='text'],select").attr('disabled',true);
} 
});


			$(document).on('click', '#addSetGet', function(){

				var html=`
				
				<div class="col s12" id="rowSetGet">

				<div class="input-field col s5">
				<select name="setGetType[]" data-position="bottom" data-tooltip="Informacion" class="tooltipped validate">
				<option selected disabled>Seleccione</option>
				<option value="public">Public</option>
				<option value="private">Private</option>
				<option value="protected">Protected</option>
				</select>


				</div>

				<div class="input-field col s6">
				<input data-position="bottom" data-tooltip="Informacion" type="text" name="setGetCampo[]" class="tooltipped validate">
				<label data-success="Correcto..." >Nombre de la Variable</label>
				</div>

				<div class="input-field col s1">
				<button class="btn red darken-2 removeSetGet">&times</button>
				</div>
				</div>
				
				`;
				$(document).ready(function(){
					$('select').formSelect();
				})	
				$('.setGetCont').append(html);
			});

			$(document).on('click', '.removeSetGet', function(){
				$(this).closest('#rowSetGet').remove();
			});




				$(document).on('click', '#addRowForm', function(){

				var html=`
						<div class="col s12" id="rowPersonForm">

						<div class="input-field col s3">
							<input data-position="bottom" data-tooltip="Informacion" type="text" name="campo[]" class="tooltipped validate">
							<label data-success="Correcto..." >Nombre del Campo</label>
						</div>

						<div class="input-field col s3">
							<input data-position="bottom" data-tooltip="Informacion" type="number" name="columnas[]" class="tooltipped validate" min="1" 
							max="12">
							<label data-success="Correcto..." >numero de columnas</label>
						</div>


						<div class="input-field col s3">
							<select name="tipoCampo[]" data-position="bottom" data-tooltip="Informacion" class="tooltipped validate">
								<option selected disabled>Seleccione</option>
								<option value="text">texto</option>
								<option value="date">date</option>
								<option value="number">numero</option>
								<option value="textarea">text area</option>
								<option value="file">file</option>
								<option value="select">select</option>
								<option value="checkbox">CheckBox</option>
							</select>
						</div>

						<div class="input-field col s2">
							<label>
								<input type="checkbox" name="indiColumn[]">
								<span>fila individual?</span>
							</label>  
						</div>
						<div class="col s1">
							<button class="btn red tooltipped removePersonFormRow" type="button" data-position="bottom" data-tooltip="Agregar otro campo">&times</button>
						</div>
					</div>
				
				`;
				$(document).ready(function(){
					$('select').formSelect();
				})	
				$('.contentPersonForm').append(html);
			});

			$(document).on('click', '.removePersonFormRow', function(){
				alert("Removida")
				$(this).closest('#rowPersonForm').remove();
			});

		})


		$(document).ready(function(){
			$('select').formSelect();
		})	



		/*ENVIO DEL FORMULARIO*/
		$("#enviarForm").on("click",function(){
			var accion = $('.especial').serialize();
console.log(accion)

		})
		  // var accion = $('.especial').serialize();

