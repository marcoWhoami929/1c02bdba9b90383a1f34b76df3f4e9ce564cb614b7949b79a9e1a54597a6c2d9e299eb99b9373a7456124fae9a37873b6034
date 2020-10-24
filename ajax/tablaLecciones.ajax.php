<?php
error_reporting(0);
session_start();
require_once "../controladores/general.php";
require_once "../modelos/general.php";

class TablaFlyGeneral{

 	/*=============================================
  	TABLA IMPORTACIONES
  	=============================================*/ 

	public function lecciones(){
		$table = "lecciones";
		$campos = "*";
		$parametros = "";

 		$lecciones = ControladorGeneral::ctrMostrarLecciones($table,$campos,$parametros);
 		
 		$datosJson = '{
		 
	 	"data": [ ';

	 	for($i = 0; $i < count($lecciones); $i++){

	 		if ($lecciones[$i]["tipo"] == 0) {
	 			$tipo = "<span class='label label-success'>Gratuita</span>";
	 		}else{
	 			$tipo = "<span class='label label-danger'>De Paga</span>";
	 		}

			$datosJson	 .= '[
				      "'.($i+1).'",
				      "'.$lecciones[$i]["nombre"].'",
				      "'.$lecciones[$i]["cantidadPreguntas"].'",
				      "'.$lecciones[$i]["puntuacion"].' %",
				      "'.$lecciones[$i]["fecha"].'",
				      "'.$tipo.'"
				    ],';

	 	}

	 	$datosJson = substr($datosJson, 0, -1);

		$datosJson.=  ']
			  
		}'; 

		echo $datosJson;

 	}
}

/*=============================================
 TABLA DE IMPORTACIONES
=============================================*/ 
$activar = new TablaFlyGeneral();
$activar -> lecciones();
