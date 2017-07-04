<?php
/**
@author Josue mendez
* @class ControlDB
* @brief Modelo de base de datos para la tabla de usuarios
*Clase para crear la conexión 
*/
class ControlDB {
	
	function __construct(){
		# code...
		try {
			//Cadena de conexión
		$this->conexion=mysqli_connect("localhost", "root", "")or die("No se puede conectar a la base de datos");
		//seleccionar la base de datos
		mysqli_select_db($this->conexion, "kahoot")or die ("No se ha encontrado la base de datos");
		//echo "conexion exitosa";
		} catch (Exception $e) {
			throw new Exception("Error Processing Request", 1);
		}	
	}
	//funcion consultar y el $sql(consultas) sera el parametro q la funcion pide 
	function consultar($sql){
		$res_consulta=mysqli_query($this->conexion, $sql);
		$datos_array=NULL;
		while($fila=mysqli_fetch_assoc($res_consulta)) {
			# code...
			$datos_array[]=$fila;
		}
		return $datos_array;
	}
}




?>