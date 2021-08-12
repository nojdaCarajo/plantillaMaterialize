<?php

class RutasControlador
{
    public function rutaCtrl()
    {
        if (empty($_GET['accion'])) {
            $datosCtrl = 'index';
        } else {
            $datosCtrl = $_GET['accion'];
        }
        $respuesta = RutasModelo::rutaModelo($datosCtrl);

        $infoPagina="© {fecha} {acronimo del sistema} | {NOMBRE COMPLETO DEL SISTEMA}";
    }

       /* public function accesoCtrl()
    {
        
        $respuesta = RutasModelo::accesoModel();
    }*/
}
