<?php 
	
	$host = "localhost";    
	$basededatos = "php-2021";    
	$usuariodb = "root";    
	$clavedb = "";   


	$tabla_db1 = "usuarios"; 	   
	

	
	
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo "No es posible la conexion con la Base de Datos....";
	    exit();
	}

	else{
		echo "Estas conectado";
	}

?>