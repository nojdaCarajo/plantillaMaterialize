<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="generador/generador.css">

	<title>..::GENERADOR::..</title>
</head>
<body>

	<div class="Cont">


		<form action="" method="POST">
			<div class="fullDiv">
				<input type="checkbox" name="" id="fullPackCheck">
				<label>Paquete completo</label>
				<p><input type="text" name="fullPack" id="fullPack" ></p>
			</div>
			<hr>
			<div class="grupalCheck" id="grupalCheck">

				<div class="individual">
					<input type="checkbox" name="" id="claseCheck">
					<label>Clase</label>
					<p><input type="text" name="clase" id="clase" ></p>
				</div>

				<div class="individual">
					<input type="checkbox" id="controladorCheck">
					<label>Controlador</label>
					<p><input type="text" name="controlador" id="controlador"></p>
				</div>
				<div class="individual">
					<input type="checkbox" id="vistaCheck">
					<label>Vista</label>
					<p><input type="text" name="vista" id="vista"></p>
				</div>
				<div class="individual">
					<input type="checkbox" id="jsCheck">Check
					<label>Js</label>
					<p><input type="text" name="js" id="js"></p>

				</div>
				<div class="individual">
					<input type="checkbox" id="ajaxCheck">
					<label>Ajax</label>
					<p><input type="text" name="ajax" id="ajax"></p>
				</div>

				<div class="individual">
					<input type="checkbox" id="listaCheck">
					<label>Lista</label>
					<p><input type="text" name="lista" id="lista"></p>
				</div>

				<div class="individual">
					<input type="checkbox" id="formularioCheck">
					<label>Formulario</label>
					<p><input type="text" name="formulario" id="formulario"></p>
				</div>

			</div>	
			<div class="fullDiv">

				<input type="checkbox" name="personForm" id="formPer">
				<label>Personalizar formulario</label>



				<div id="perForm" class="perForm oculto">

					<p><h1>Datos del formulario</h1></p>

					<label>Nombre del campo</label>
					<input type="text" name="nombreCampo[]">

					<label>Numero de columnas</label>
					<input type="number" name="columnasCampo[]">


					<label>Tipo de Campo</label>							
					<select name="tipoCampo[]">
						<option selected disabled>Seleccione</option>
						<option value="text">texto</option>
						<option value="date">date</option>
						<option value="number">numero</option>
						<option value="textarea">text area</option>
						<option value="file">file</option>
						<option value="select">select</option>
						<option value="checkbox">CheckBox</option>
					</select>

					<label><span>fila individual?</span></label>
					<input type="checkbox" name="individual[]">
					<p>
						<button type="button" id="agregar">+</button>
					</p>
					<hr>
					<div  class="merwebo">
					</div>
				</div>
			</div>
			<div class="fullDiv">

				<p><input type="submit" name="enviar"></p>
			</div>
		</form>
	</div>


	<script src="generador/jquery.js"></script>


	<script src="generador/generador.js"></script>

</body>
</html>

<?php
if (isset($_POST["enviar"])) {
if (isset($_POST["personForm"])) {
  //if ($_POST["personForm"]=="on") {
 echo '<script type="text/javascript">
	alert("Enviado!!")
	</script>';	
  }
	if (isset($_POST["fullPack"])) {
		$_POST["clase"]=$_POST["fullPack"];
		$_POST["lista"]=$_POST["fullPack"];
		$_POST["ajax"]=$_POST["fullPack"];
		$_POST["formulario"]=$_POST["fullPack"];
		$_POST["controlador"]=$_POST["fullPack"];
		$_POST["vista"]=$_POST["fullPack"];
		$_POST["js"]=$_POST["fullPack"];

}


if (isset($_POST["lista"])) {
	$listado=$_POST["lista"];
	require_once 'generador/lista.php';
	$ar= fopen("vista/listas/".$listado."Lista.php", "a");
	fwrite($ar,  $Lista);
	echo '<script type="text/javascript">
	alert("Lista creado exitosamente")
	</script>';	
}


if (isset($_POST["ajax"])) {
	$datosAjax=$_POST["ajax"];
	require_once 'generador/ajax.php';
	$ar= fopen("vista/ajax/".$datosAjax."Ajax.php", "a");
	fwrite($ar,  "<?php");
	fwrite($ar,  $Ajax);
	fwrite($ar,  "?>");
	echo '<script type="text/javascript">
	alert("Ajax creado exitosamente")
	</script>';
}

if (isset($_POST["formulario"])) {
	$datosFormulario=$_POST["formulario"];
	require_once 'generador/formulario.php';
	$ar= fopen("vista/formularios/".$datosFormulario."Formulario.php", "a");
	fwrite($ar,  $Formulario);
	echo '<script type="text/javascript">
	alert("Formulario creado exitosamente")
	</script>';
}


/*
if (isset($_POST["formulario"])) {
	$datosFormulario=$_POST["formulario"];
	require_once 'generador/formulario.php';
	$ar= fopen("vista/formularios/".$datosFormulario."Formulario.php", "a");
	fwrite($ar,  $Formulario);
	echo '<script type="text/javascript">
	alert("Formulario creado exitosamente")
	</script>';
}*/


if (isset($_POST["clase"])) {
	$datosClase=$_POST["clase"];
	require_once 'generador/clase.php';
	$ar= fopen("modelo/".$datosClase."Modelo.php", "a");

	fwrite($ar,  "<?php");
	fwrite($ar,  $Clase);
	fwrite($ar,  "?>");

	$ar= fopen("modelo/modulos.php", "a+");
	fseek($ar, 5);
	fwrite($ar, PHP_EOL);
	fwrite($ar, "require_once 'modelo/".$datosClase."Modelo.php';");


	echo '<script type="text/javascript">
	alert("Clase creado exitosamente")
	</script>';

}


if (isset($_POST["controlador"])) {
	$datosControlador=$_POST["controlador"];
	require_once 'generador/controlador.php';
	$ar= fopen("controlador/".$datosControlador."Controlador.php", "a");
	fwrite($ar,  "<?php");
	fwrite($ar,  $Ctrl);
	fwrite($ar,  "?>");

	$ar= fopen("modelo/modulos.php", "a+");
fwrite($ar, PHP_EOL);
	fwrite($ar, "require_once 'controlador/".$datosControlador."Controlador.php';");
	echo '<script type="text/javascript">
	alert("Controlador creado exitosamente")
	</script>';

}


if (isset($_POST["vista"])) {
	require_once 'generador/vista.php';
	$ar= fopen("vista/".$_POST["vista"]."Vista.php", "a");

	fwrite($ar,  $Vista);


	$ar= fopen("modelo/entradas.php", "a");

	fwrite($ar, PHP_EOL);
	fwrite($ar, 'array_push($listaBlanca,"'.$_POST["vista"].'");');
	echo '<script type="text/javascript">
	alert("Vista creado exitosamente")
	</script>';
}


if (isset($_POST["js"])) {
	require_once 'generador/js.php';
	$ar= fopen("vista/js/".$_POST["js"]."Js.js", "a");
	fwrite($ar,  $Js);
	echo '<script type="text/javascript">
	alert("Javascript creado exitosamente")
	</script>';

}
/*echo '<script type="text/javascript">
window.location.href="generador.php";
</script>';*/


var_dump($_POST);
}