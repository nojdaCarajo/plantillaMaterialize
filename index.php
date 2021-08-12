<?php

require_once 'modelo/rutas.php';
require_once 'controlador/rutas.php';
require_once 'modelo/conexion.php';
require_once 'modelo/modulos.php';
$mvc = new RutasControlador();
$mvc->rutaCtrl();