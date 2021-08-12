<!DOCTYPE html>
<html>
<head>
  <?php require_once "vista/componentes/header.php";?>
  <?php// session_destroy(); ?>
  <link rel="stylesheet" href="vista/css/animacion.css">
  <title>.::LOGIN::.</title>
  <style>

img{
  margin-top: 5%;
}

   .dir{

   background: #fff;
    } 
    .login-cont{
      float: left;
      position: absolute;
      height: 100%;
      width: 30%;
      right: 0;
        background: #497E1A;
       background-image: linear-gradient(134deg, #1f1046 0%, #000000 100%);  

    
    }
    .login-view{
 
       float: left;
      position: absolute;
      height: 100%;
      width: 70%;
      left: 0;
      background: #e7e7ee;

    }


  </style>
</head>
<body>
  <div id="alfa" class="expandido">
    <div class="login-view">

<center>
  <img src="vista/img/sisLockLogo.png" width="50%">
</center>

    </div>

   <div class="login-cont">
    <div class="row">
      <div class="col s12">
        <center>
        <img src="vista/img/sisLock.png" alt="" width="40%" class=" dir circle responsive-img ">
        </center>
      </div>
    </div>
     <div class="row">
    <div class="vainalogin">
    <h5 class="white-text center-align">LOGIN</h5>
  </div>
  </div>
  <div class="row">
    <form id="loginForm">
 <div class="row" >
  <div class="row">
    <div class="input-field col s12">
    <i class="fas fa-id-card prefix white-text darken-4"></i>
    <input data-position="bottom" data-tooltip="ingrese su cedula" id="cedula" type="text" name="cedula" class="tooltipped white-text validate">
    <label data-success="Correcto..."  for="cedula">cedula</label>
  </div>
</div>
<div class="row">
    <div class="input-field col s12">
    <i class="fas fa-key prefix white-text darken-4"></i>
    <input data-position="bottom" data-tooltip="Ingrese su contraseña" id="password" type="password" name="password" class="tooltipped white-text validate">
    <label data-success="Correcto..."  for="password">password</label>
  </div>
</div>
<div class="row">
    <div class="input-field col s12">
    <button id="btnLogin" type="button" class="col s12 btn btn-lg waves-effect waves-blue blue darken-4">Iniciar session</button>
  </div>
</div>

</div>
</form>
<div class="row">
 
  <center class="col s12">
 <a class=" modal-trigger" href="#modal1">Recuperar contraseña</a> 
</center>
</div>
  </div>


     </div>






  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">

      <h4>Recuperacion de contraseña</h4>

      <form id="passwordForm">
        <div class="row">
          <div class="input-field col s8">
            <i class="fas fa-id-card prefix darken-4"></i>
            <input data-position="bottom" data-tooltip="ingrese su cedula" id="cedulaPassword" type="text" name="cedulaPassword" class="tooltipped  validate">
            <label data-success="Correcto..."  for="cedulaPassword">cedula</label>
          </div>

          <div class="input-field col s4">
            <button type="button" class="btn" id="recuPass">Recuperar <i class="fas fa-key">
                    </i>
                  </button>
          </div>
        </div>

      </form>
    </div>

  </div>

</div>

<?php require_once "vista/componentes/footer.php";?>
<script src="vista/js/usuariosJs.js"></script>
<script type="text/javascript">
//   $("#btnLogin").on("click", function() {
//    launch_toast("exito","fas fa-user","Bienvenido al sistema",0)
// setTimeout(function(){ 
//     window.location= '?accion=inicio';
// }, 3000);

//   })
</script>
</body>
</html>