<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/generador.css">
	<link rel="stylesheet" type="text/css" href="../vista/materialize/css/materialize.min.css">
	<style type="text/css">
	
</style>
<title>..::GENERADOR::..</title>
</head>
<body class="">

	<div class="container">
		<form action="public/generador.php" method="post">
			<div class="row">
				<div class="col s12 center">
					<h1>Generador</h1>
				</div>
			</div>
			<!-- Lista de Paquete completo Inicio-->
			<div class="row">
				<div class="input-field col s2">
					<label>
						<input type="checkbox" id="fullPackCheck" name="fullPackCheck">
						<span>paquete completo</span>
					</label>	
				</div>
				<div class="input-field col s4">
					<input data-position="bottom" data-tooltip="Paquete completo" id="fullPack" type="text" name="fullPack" class="tooltipped validate">
					<label data-success="Correcto..."  for="fullPack">Paquete completo</label>
				</div>
			</div>
			<!-- Lista de Paquete completo Fin-->


			<!-- Formulario Desplegable Inicio-->
			<div class="especial">
				<div class="row">
					<div class="col s12">
						<div class="selectores">
							<div class="input-field col s2">
								<label>
									<input type="checkbox" name="personalFormName[]" value="Clase">
									<span>Clase</span>
								</label>  
							</div>
							<div class="input-field col s4">
								<input data-position="bottom" data-tooltip="Informacion" id="Clase" type="text" name="Clase" class="tooltipped validate">
								<label data-success="Correcto..."  for="Clase">Clase</label>
							</div>
						</div>
						<div class="selectores">
							<div class="input-field col s2">
								<label>
									<input type="checkbox" name="personalFormName[]" value="Controlador">
									<span>Controlador</span>
								</label>  
							</div>
							<div class="input-field col s4">
								<input data-position="bottom" data-tooltip="Informacion" id="Controlador" type="text" name="Controlador" class="tooltipped validate">
								<label data-success="Correcto..."  for="Controlador">Controlador</label>
							</div>
						</div> 
					</div>
				</div>


				<div class="row">
					<div class="col s12">
						<div class="selectores">
							<div class="input-field col s2">
								<label>
									<input type="checkbox" name="personalFormName[]" value="Vista">
									<span>Vista</span>
								</label>  
							</div>
							<div class="input-field col s4">
								<input data-position="bottom" data-tooltip="Informacion" id="Vista" type="text" name="Vista" class="tooltipped validate">
								<label data-success="Correcto..."  for="Vista">Vista</label>
							</div>
						</div>

						<div class="selectores">
							<div class="input-field col s2">
								<label>
									<input type="checkbox" name="personalFormName[]" value="Js">
									<span>Js</span>
								</label>  
							</div>
							<div class="input-field col s4">
								<input data-position="bottom" data-tooltip="Informacion" id="Js" type="text" name="Js" class="tooltipped validate">
								<label data-success="Correcto..."  for="Js">Js</label>
							</div>
						</div>
					</div>

				</div>
				<div class="row">
					<div class="col s12">
						<div class="selectores">
							<div class="input-field col s2">
								<label>
									<input type="checkbox" name="personalFormName[]" value="Ajax">
									<span>Ajax</span>
								</label>  
							</div>
							<div class="input-field col s4">
								<input data-position="bottom" data-tooltip="Informacion" id="Ajax" type="text" name="Ajax" class="tooltipped validate">
								<label data-success="Correcto..."  for="Ajax">Ajax</label>
							</div>
						</div>
						<div class="selectores">
							<div class="input-field col s2">
								<label>
									<input type="checkbox" name="personalFormName[]" value="Listado">
									<span>Listado</span>
								</label>  
							</div>
							<div class="input-field col s4">
								<input data-position="bottom" data-tooltip="Informacion" id="Listado" type="text" name="Listado" class="tooltipped validate">
								<label data-success="Correcto..."  for="Listado">Listado</label>
							</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="col s12">
						<div class="selectores">
							<div class="input-field col s2">
								<label>
									<input type="checkbox" name="personalFormName[]" value="Formulario">
									<span>Formulario</span>
								</label>  
							</div>
							<div class="input-field col s4">
								<input data-position="bottom" data-tooltip="Informacion" id="Formulario" type="text" name="Formulario" class="tooltipped validate">
								<label data-success="Correcto..."  for="Formulario">Formulario</label>
							</div>
						</div>
					</div>

				</div> 
			</div>
			<!-- Formulario Desplegable Fin-->

			<!-- Personalizacion de contenido Inicio-->
			<div class="row">
				<div class="col s12">
					<div class="input-field col s6">
						<label>
							<input type="checkbox" name="" id="personalFormCheck">
							<span>Personalizar Formulario</span>
						</label>  
					</div>
					<div class="input-field col s6">
						<label>
							<input type="checkbox" name="personalSettersGettersCheck" id="personalSettersGettersCheck">
							<span>Personalizar atributos de la clase</span>
						</label>  
					</div>

				</div>

			</div>

			<!-- Personalizacion de contenido Fin-->


			<!-- Formulario Personalizado Inicio-->
			<div class="personalForm">
				<div class="row">
					<div class="col s12">
						<h3 class="center">Datos del Formulario</h3>
					</div>
					<div class="row">
						<div class="col s12">
							<button class="btn green tooltipped" type="button" id="addRowForm" data-position="bottom" data-tooltip="Agregar otro campo">+</button>
						</div>
					</div>
					<div class="col s12">

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
						
					</div>

					<div class="contentPersonForm">

					</div>

				</div>
			</div>
			<!-- Formulario Personalizado Fin-->


			<!-- Personalizar Sets y Getters Inicio-->
			<div class="personalSettersGetters">
				<div class="row">
					<div class="col s12">
						<h3 class="center">Añadir Setters y Getters</h3>
					</div>
					<div class="row">
						<div class="col s12">
							<button class="btn green tooltipped" type="button" id="addSetGet" data-position="bottom" data-tooltip="Agregar otra Variable">+</button>
						</div>
					</div>
					<div class="col s12">

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
					</div>
					<div class="setGetCont">

					</div>
				</div>
			</div>
			<!-- Personalizar Sets y Getters Fin-->
<button type="submit" class="btn teal" id="enviarForm">Enviar</button>
			
		</form>
	</div>

	<script src="js/jquery.js"></script>
	<script src="../vista/materialize/js/materialize.min.js"></script>

	<script src="js/script.js"></script>


</body>
</html>

<!-- <?php 
if ($_POST) {
	var_dump($_POST);
	if (isset($_POST["Javascript"])) {
		echo "<br> <h1>Se envio un input vacio</h1>";
	}
}

?> -->
