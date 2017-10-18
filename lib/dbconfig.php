<?php
	
	//Conexión a la BDD del sistema de Conciliación
	function query1($sql)
	{
		$server = "10.2.74.36";//Dirección del servidor
		$basedatos = "pesca_arrastre";//Base de datos a ser utilizada
		$user = "root"; //usuario
		$pass = "namd0gma1";//namd0gma1
		$connect = mysql_connect ($server,$user,$pass);//Establesco la conexión al servidor de la BDD
		mysql_select_db ($basedatos, $connect);//Selecciono la BDD
		$result=mysql_query ($sql,$connect);//Realizo el query
		return ($result);//Retorno el resultado del query
	}
	
?>