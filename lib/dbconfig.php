<?php
	
	//Conexi�n a la BDD del sistema de Conciliaci�n
	function query1($sql)
	{
		$server = "10.2.74.36";//Direcci�n del servidor
		$basedatos = "pesca_arrastre";//Base de datos a ser utilizada
		$user = "root"; //usuario
		$pass = "namd0gma1";//namd0gma1
		$connect = mysql_connect ($server,$user,$pass);//Establesco la conexi�n al servidor de la BDD
		mysql_select_db ($basedatos, $connect);//Selecciono la BDD
		$result=mysql_query ($sql,$connect);//Realizo el query
		return ($result);//Retorno el resultado del query
	}
	
?>