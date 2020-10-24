<?php

require_once("../controladores/general.php");
require_once("../modelos/general.php");

class AjaxFuncionesGeneral{

	/*GUARDAR UNA NUEVA LECCION*/	
	public $nombreLeccion;
	public $numeroPreguntas;
	public $tipoLeccion;

	public function insertarLeccion(){
		$type = "insert";
		$table = "lecciones";

		$nombre = $this->nombreLeccion;
		$cantidadPreguntas = $this->numeroPreguntas;
		$tipo = $this->tipoLeccion;

		$puntuacion = 100;
		$fecha = date('Y-m-d');

		$tabla = "INSERT INTO ".$table." (nombre,cantidadPreguntas,puntuacion,fecha,tipo)";
		$campos = "VALUES ('".$nombre."',".$cantidadPreguntas.",".$puntuacion.",'".$fecha."',".$tipo.")";
		$parametros = "";

		$respuesta = ModeloGeneral::mdlDatosPreguntas($type,$tabla,$campos,$parametros);

		echo $respuesta;

	}
	/*GUARDAR UNA NUEVA PREGUNTA*/	
	public $leccion;
	public $nombrecorto;
	public $pregunta;
	public $ponderacion;

	public function insertarPreguntas(){
		$type = "insert";
		$table = "preguntas";

		$idLeccion = $this->leccion;
		$nombrecorto = $this->nombrecorto;
		$pregunta = $this->pregunta;
		$ponderacion = $this->ponderacion;
		$fecha = date('Y-m-d');

		$tabla = "INSERT INTO ".$table." (nombrecorto,idLeccion,pregunta,ponderacion,fecha)";
		$campos = "VALUES ('".$nombrecorto."',".$idLeccion.",'".$pregunta."',".$ponderacion.",'".$fecha."')";
		$parametros = "";

		$respuesta = ModeloGeneral::mdlDatosPreguntas($type,$tabla,$campos,$parametros);

		echo $respuesta;

	}
	/*GUARDAR UNA NUEVA PREGUNTA*/	
	public $datosRespuesta;
	public $idLeccion;
	public $idPregunta;


	public function insertarRespuesta(){
		$type = "insert";
		$table = "respuestaspreguntas";

		$respuesta = $this->datosRespuesta;
		$idLeccion = $this->idLeccion;
		$idPregunta = $this->idPregunta;

		$fecha = date('Y-m-d');

		$tabla = "INSERT INTO ".$table." (idLeccion,idPregunta,respuesta,fecha)";
		$campos = "VALUES (".$idLeccion.",".$idPregunta.",'".$respuesta."','".$fecha."')";
		$parametros = "";

		$respuesta = ModeloGeneral::mdlDatosPreguntas($type,$tabla,$campos,$parametros);

		echo $respuesta;

	}

}

///////////////INSTANCIACIONES DE CLASES//////////////
/***************LECCIONES**************/
if(isset($_POST["nombreLeccion"])){

	$insertarLeccion = new AjaxFuncionesGeneral();
	$insertarLeccion -> nombreLeccion = $_POST["nombreLeccion"];
	$insertarLeccion -> numeroPreguntas = $_POST["numeroPreguntas"];
	$insertarLeccion -> tipoLeccion = $_POST["tipoLeccion"];
	$insertarLeccion -> insertarLeccion();

}
/***************PREGUNTAS**************/
if(isset($_POST["pregunta"])){

	$insertarPregunta = new AjaxFuncionesGeneral();
	$insertarPregunta -> leccion = $_POST["leccion"];
	$insertarPregunta -> nombrecorto = $_POST["nombrecorto"];
	$insertarPregunta -> pregunta = $_POST["pregunta"];
	$insertarPregunta -> ponderacion = $_POST["ponderacion"];
	$insertarPregunta -> insertarPreguntas();

}
/***************RESPUESTAS-PREGUNTAS**************/
if(isset($_POST["datosRespuesta"])){

	$insertarRespuesta = new AjaxFuncionesGeneral();
	$insertarRespuesta -> datosRespuesta = $_POST["datosRespuesta"];
	$insertarRespuesta -> idLeccion = $_POST["idLeccion"];
	$insertarRespuesta -> idPregunta = $_POST["idPregunta"];
	$insertarRespuesta -> insertarRespuesta();

}

?>
