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
          <li><a href="#">Inicio</a></li>
          <li> <i class="fas fa-angle-right"></i></li>
          <li><?php echo ucwords($accion); ?></li>
        </ol>
      </div>
    </div>
  <div class="row" >
<div class="col s12">
  <table>
    <tr>
      <td>fatos</td>
      <td>fatos</td>
      <td>fatos</td>
      <td>fatos</td>
      <td>fatos</td>
    </tr>
    <tr>
      <td>fatos</td>
      <td>fatos</td>
      <td>fatos</td>
      <td>fatos</td>
      <td>fatos</td>
    </tr>
    <tr>
      <td>fatos</td>
      <td>fatos</td>
      <td>fatos</td>
      <td>fatos</td>
      <td>fatos</td>
    </tr>
    <tr>
      <td>fatos</td>
      <td>fatos</td>
      <td>fatos</td>
      <td>fatos</td>
      <td>fatos</td>
    </tr>
  </table>
</div>
  </div>
  </div>
  <div id="zebra">

  </div>

</div>

<?php require_once "vista/componentes/footer.php";?>

</body>
</html>