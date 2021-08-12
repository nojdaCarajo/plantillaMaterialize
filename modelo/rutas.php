<?php

class RutasModelo
{

    public function rutaModelo($datosModel)
    {
 require_once "entradas.php";
        $a=false;
        $b=false;
        $c=0;
        foreach ($listaBlanca as $key => $value) {
            if ($value==$datosModel) {
                $a=true;
            }
        }

        if ($a) {
           $modulo = "vista/" . $datosModel . "Vista.php";
        }elseif ($datosModel == "index" || $datosModel == "login") {
            $modulo = "vista/loginVista.php";

        }else{
             $modulo = "vista/errorVista.php";
        }
 require_once $modulo;
    }

        /*
        if ($datosModel == "login" ||
            $datosModel == "inicio" ||
            $datosModel == "oficina" ||
            $datosModel == "cartas" ||
            $datosModel == "demo" ||
            $datosModel == "perfil" ||
            $datosModel == "ini" ||
            $datosModel == "sedes" ||
            $datosModel == "unidades" ||
            $datosModel == "empleados" ||
            $datosModel == "pruebas" ||
            $datosModel == "evaluacion" ||
            $datosModel == "prestamo" ||
            $datosModel == "bitacora" ||
            $datosModel == "usuarios") {

            $modulo = "vista/" . $datosModel . "Vista.php";
        } elseif ($datosModel == "index") {
            $modulo = "vista/loginVista.php";

        } else {
            $modulo = "vista/errorVista.php";
        }
        require_once $modulo;
    }*/
/*
    public function accesoModel()
    {

        if(isset($_SESSION['datosUsuario']["session"])){

   

} else {

    echo '<script type="text/javascript">
    alert("Debes iniciar sesion para poder ingresar al sistema.");
    window.location.href="http://localhost/cafim_3.0/?accion=login";
    </script>';
}

    }*/
}
