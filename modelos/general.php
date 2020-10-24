<?php
include_once("conexion.php");

class ModeloGeneral{


	static public function mdlMostrarLecciones($tabla,$campos,$parametros){

		$stmt = Conexion::conectar()->prepare("SELECT $campos FROM $tabla $parametros");

		$stmt -> execute();

		return $stmt->fetchAll();

	}
	static public function mdlMostrarDatosLecciones($tabla,$campos){

		$stmt = Conexion::conectar()->prepare("SELECT $campos FROM $tabla");

		$stmt -> execute();

		return $stmt->fetchAll();

	}
	static public function mdlDatosPreguntas($type,$tabla,$campos,$parametros){

		if ($type == "insert") {

			$stmt = Conexion::conectar()->prepare("$tabla $campos $parametros");

			if($stmt -> execute()){

				return "ok";
			
			}else{

				return "error";	

			}
		}else {
			return "error";
		}

		


	}

}


?>