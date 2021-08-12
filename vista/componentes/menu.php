
<div class="col s12">

                <div class="col s12">
                    <hr>
                </div>
            </div>

<div class="nav">



        <ul>

           
           <li class="b">
               <a href="?accion=inicio">
                   <i class="fas fa-home"></i> 
                   Inicio
               </a>
           </li>
           

           <?php 
 require_once "modelo/entradas.php";
 foreach ($listaBlanca as $key => $value) {
           echo '
                <li class="b">
               <a href="?accion='.$value.'">
                   <i class="fas fa-home"></i> 
                   '.$value.'
               </a>
           </li>
           ';
        }
            ?>

            <!-- <li class="b">
               <a href="?accion=demo">
                   <i class="fas fa-home"></i> 
                   Demo
               </a>
           </li> -->
<!-- 
<?php 

$i=sizeof($_SESSION["modulos"]);
foreach ($_SESSION["modulos"] as $key) {



if ($_SESSION["modulos"][$i]=="Unidades de Trabajo") {
$modulos="Unidades";
}else{
  $modulos=$_SESSION["modulos"][$i];
}

    echo '
 <li class="b">
                <a href="'.strtolower ($modulos).'
">  ';

switch ($_SESSION["modulos"][$i]) {
    case 'Usuarios':
        $icon='fas fa-users';
        break;


          case 'Elementos':
        $icon='fas fa-list-ul';
        break;


          case 'Bitacora':
        $icon='fas fa-list-ol';
        break;

          case 'Cartas':
        $icon='fas fa-envelope-open-text';
        break;
    
    default:
        $icon='';
        break;
}
                    echo '<i class="'.$icon.'"></i> 
                    '.$modulos.'
                </a>
            </li>
    ';
$i--;
}

 ?>
 -->
         
        </ul>
    </div>