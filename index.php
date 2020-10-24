<?php 

require_once "modelos/rutas.php";

/*****************MODELOS**********************/
require_once "controladores/plantilla.controlador.php";
require_once "controladores/administradores.php";
require_once "controladores/general.php";

/*****************MODELOS**********************/
require_once "modelos/plantilla.modelo.php";
require_once "modelos/administradores.php";
require_once "modelos/general.php";

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();

 ?>