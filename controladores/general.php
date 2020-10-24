<?php

class ControladorGeneral{


	static public function ctrMostrarLecciones($table,$campos,$parametros){

		$tabla = $table;

		$respuesta = ModeloGeneral::mdlMostrarLecciones($tabla,$campos,$parametros);

		return $respuesta;
	}

	static public function ctrMostrarDatosLecciones($table,$campos){

		$tabla = $table;

		$respuesta = ModeloGeneral::mdlMostrarDatosLecciones($tabla,$campos);

		return $respuesta;
	}


}

?>