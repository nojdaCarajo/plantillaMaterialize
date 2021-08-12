<!DOCTYPE html>
<html>
<head>
  <?php require_once "vista/componentes/header.php";?>
  <title>.::<?php echo strtoupper($accion) ; ?>::.</title>
</head>
<body>
  <div id="alfa" class="expandido">

    <div id="bravo">
    
      <?php require_once "vista/componentes/info.php"; ?>
    </div>

    <div id="charlie">
     <?php require_once "componentes/menu.php"; ?>
   </div>

   <div id="delta">
    <div class="row" >
      <div class="bradbury">
        <ol>
          <li><a href="?accion=inicio">Inicio</a></li>
          <li> <i class="fas fa-angle-right"></i></li>
          <li><?php echo ucwords($accion); ?></li>
        </ol>
      </div>
    </div>
  <div class="row" >
    <?php require_once "vista/listas/".strtolower ($accion)."Listado.php"; ?>
    <?php require_once "vista/formularios/".strtolower ($accion)."Formulario.php"; ?>
  </div>
  </div>
  <div id="zebra">

  </div>

</div>

<?php require_once "vista/componentes/footer.php";?>
<script src="vista/js/<?php echo strtolower($accion) ; ?>Js.js"></script>
</body>
</html>