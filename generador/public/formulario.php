<?php  
/*$formularioPredefinido=' <div class="row">';
$columCamp=0;
$red=0;
if (isset($_POST["personForm"])) {

 $cant=sizeof($_POST["nombreCampo"]);   
 for ($i=0; $i - $cant ; $i++) { 
  $red++;

  if ($columCamp == 0) {
   $formularioPredefinido.='<div class="row">';
 }
 $columCamp=$columCamp+$_POST["columnasCampo"][$i];
 switch ($_POST["tipoCampo"][$i]) {
  case 'textarea':
  $formularioPredefinido.='
  <div class="input-field col s'.$_POST["columnasCampo"][$i].'">
  <textarea id="'.$_POST["nombreCampo"][$i].'" class="materialize-textarea" data-length="120"></textarea>
  <label for="'.$_POST["nombreCampo"][$i].'">'.$_POST["nombreCampo"][$i].'</label>
  </div>';
  break;

  case 'date':
  $formularioPredefinido.='
  <div class="input-field col s'.$_POST["columnasCampo"][$i].'">
  <i class="fas fa-id-card prefix"></i>
  <input data-position="bottom" data-tooltip="Informacion" id="'.$_POST["nombreCampo"][$i].'" type="text" name="'.$_POST["nombreCampo"][$i].'" class="tooltipped validate datepicker">
  <label data-success="Correcto..."  for="'.$_POST["nombreCampo"][$i].'">'.$_POST["nombreCampo"][$i].'</label>
  </div>';
  break;

  case 'select':
  $formularioPredefinido.='
  <div class="input-field col s'.$_POST["columnasCampo"][$i].'">
  <select name="'.$_POST["nombreCampo"][$i].'" id="'.$_POST["nombreCampo"][$i].'">
  <option disabled>Selecccione</option>
  <option value="1">Activo</option>
  <option value="0">Inactivo</option>
  </select>
  <label for="'.$_POST["nombreCampo"][$i].'">'.$_POST["nombreCampo"][$i].'</label>
  </div>
  ';
  break;

  
  default:
  $formularioPredefinido.='
  <div class="input-field col s'.$_POST["columnasCampo"][$i].'">
  <i class="fas fa-id-card prefix"></i>
  <input data-position="bottom" data-tooltip="Informacion" id="'.$_POST["nombreCampo"][$i].'" type="'.$_POST["tipoCampo"][$i].'" name="'.$_POST["nombreCampo"][$i].'" class="tooltipped validate">
  <label data-success="Correcto..."  for="'.$_POST["nombreCampo"][$i].'">'.$_POST["nombreCampo"][$i].'</label>
  </div>';
  break;
}

if ($columCamp >= 12) {
 $formularioPredefinido.='</div>';
 $columCamp=0;
}
if ($red ==$cant) {
 $formularioPredefinido.='</div>';
}
}
}else{
*/
  $formularioPredefinido='
  <div class="row">
  <div class="input-field col s4">
  <i class="fas fa-id-card prefix"></i>
  <input data-position="bottom" data-tooltip="Informacion" id="campo_1" type="text" name="campo_1" class="tooltipped validate">
  <label data-success="Correcto..."  for="campo_1">Campo_1</label>
  </div>

  <div class="input-field col s4">
  <i class="fas fa-id-card prefix"></i>
  <input data-position="bottom" data-tooltip="Informacion" id="campo_2" type="text" name="campo_2" class="tooltipped validate">
  <label data-success="Correcto..."  for="campo_2">Campo_3</label>
  </div>

  <div class="input-field col s4">
  <i class="fas fa-id-card prefix"></i>
  <input data-position="bottom" data-tooltip="Informacion" id="campo_3" type="text" name="campo_3" class="tooltipped validate">
  <label data-success="Correcto..."  for="campo_3">Campo_3</label>
  </div>
  </div>

  <div class="row">
  <div class="input-field col s4">
  <label>
  <input type="checkbox" checked="checked" />
  <span>Yellow</span>
  </label>
  </div>
  <div class="input-field col s4">
  <label>
  <input type="checkbox" />
  <span>Blue</span>
  </label>
  </div>
  <div class="input-field col s4">
  <label>
  <input type="checkbox" />
  <span>Red</span>
  </label>
  </div>
  </div>
  <div class="row">
  <div class="input-field col s4">
  <label>
  <input class="with-gap" name="group3" type="radio" checked />
  <span>Yellow</span>
  </label>
  </div>
  <div class="input-field col s4">
  <label>
  <input name="group1" type="radio" />
  <span>Blue</span>
  </label>
  </div>
  <div class="input-field col s4">
  <label>
  <input name="group1" type="radio" />
  <span>Red</span>
  </label>
  </div>
  </div>
  <div class="row">
  <div class="input-field col s4">
  <i class="fas fa-save prefix"></i>
  <input id="icon_telephone" type="tel" class="validate">
  <label for="icon_telephone">Telephone</label>
  </div>
  <div class="input-field col s4">
  <select name="estatus" id="estatus">
  <option disabled>Selecccione</option>
  <option value="1">Activo</option>
  <option value="0">Inactivo</option>
  </select>
  <label for="estatus">Estatus</label>
  </div>

  </div>

  <div class="row">
  <div class="input-field col s6">
  <input id="input_text" type="text" data-length="10">
  <label for="input_text">Input text</label>
  </div>
  </div>
  <div class="row">
  <div class="input-field col s12">
  <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
  <label for="textarea2">Textarea</label>
  </div>
  </div>

  <div class="row">
  <div class="input-field col s12">
  <textarea id="textarea1" class="materialize-textarea"></textarea>
  <label for="textarea1">Textarea</label>
  </div>
  </div>

  <div class="file-field input-field">
  <div class="btn">
  <span>File</span>
  <input type="file">
  </div>
  <div class="file-path-wrapper">
  <input class="file-path validate" type="text">
  </div>
  </div>
  </div>
  ';
//}

$Documento='
<div class="fixed-action-btn" id="add'.ucwords($datosArchivo).'" style="bottom: 10%; margin: 0%;">
<a href="#" id="" class=" green darken-2 btn-floating btn-large pulse  tooltipped" data-position="left"  data-delay="50" data-tooltip="Añadir Registro de">
<i class="fas fa-plus"></i>
</a>
</div>

<div class="row" style=" margin: 0%;">
<div class="col s12">
<div class="card oculto" id="'.strtolower($datosArchivo).'Formulario">
<div class="card-content">
<div class="right-align">
<i style="font-size: 22pt;" class="cerrar'.ucwords($datosArchivo).' modal-close fas fa-times"></i>
</div>
<form id="'.strtolower($datosArchivo).'Form">
<span class="card-title">
<h3>Informacion de '.ucwords($datosArchivo).'</h3>
</span>

'.$formularioPredefinido.'
</form>
<div class="card-action right-align">

<button type="button"  id="eli'.ucwords($datosArchivo).'" class="btn red darken-1 oculto ">Eliminar <i class="fas fa-trash-alt"></i></button>

<button id="mod'.ucwords($datosArchivo).'" class="btn orange darken-1 oculto">Actualizar <i class="fas fa-pen"></i></button>

<button id="reg'.ucwords($datosArchivo).'" name="accion" value="registrar" class="btn green darken-1 oculto" >Guardar <i class="fas fa-save"></i></button>

<button class="cerrar'.ucwords($datosArchivo).'  modal-close waves-effect waves-light btn-flat ">Cerrar <i class="fas fa-times"></i></button>

</div>
</div>
</div>
</div>
';

//$Documento=$Formulario;
?>
