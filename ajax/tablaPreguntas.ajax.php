<?php
error_reporting(0);
session_start();
require_once "../controladores/general.php";
require_once "../modelos/general.php";

class TablaFlyGeneral{

 	/*=============================================
  	TABLA IMPORTACIONES
  	=============================================*/ 

	public function preguntas(){
		$table = "preguntas AS p INNER JOIN lecciones AS l";
		$campos = "p.*,l.nombre";
		$parametros = " WHERE p.idLeccion = l.id";

 		$preguntas = ControladorGeneral::ctrMostrarLecciones($table,$campos,$parametros);
 		
 		$datosJson = '{
		 
	 	"data": [ ';

	 	for($i = 0; $i < count($preguntas); $i++){

	 		/*=============================================
			DEVOLVER DATOS JSON
			=============================================*/

			$datosJson	 .= '[
				      "'.($i+1).'",
				      "'.$preguntas[$i]["nombreCorto"].'",
				      "'.$preguntas[$i]["nombre"].'",
				      "'.$preguntas[$i]["pregunta"].'",
				      "'.$preguntas[$i]["ponderacion"].'",
				      "'.$preguntas[$i]["fecha"].'"
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
$activar -> preguntas();
