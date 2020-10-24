<?php
error_reporting(0);
session_start();
require_once "../controladores/general.php";
require_once "../modelos/general.php";

class TablaFlyGeneral{

 	/*=============================================
  	TABLA IMPORTACIONES
  	=============================================*/ 

	public function respuestas(){
		$table = "respuestaspreguntas AS r INNER JOIN preguntas AS p ON r.idPregunta = p.id INNER JOIN lecciones AS l ON r.idLeccion = l.id";
		$campos = "r.*,l.nombre AS nombreLeccion,p.nombreCorto AS nombrePregunta";
		$parametros = "";

 		$respuestas = ControladorGeneral::ctrMostrarLecciones($table,$campos,$parametros);
 		
 		$datosJson = '{
		 
	 	"data": [ ';

	 	for($i = 0; $i < count($respuestas); $i++){

			$datosJson	 .= '[
				      "'.($i+1).'",
				      "'.$respuestas[$i]["nombreLeccion"].'",
				      "'.$respuestas[$i]["nombrePregunta"].'",
				      "'.$respuestas[$i]["respuesta"].'",
				      "'.$respuestas[$i]["fecha"].'"
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
$activar -> respuestas();
