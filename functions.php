<?php

    // Conexión a la base de datos
    function conexion($bd_config){
        try{
            $conexion = new PDO('mysql:host=localhost;dbname='. $bd_config['db_name'], $bd_config['user'], $bd_config['pass']);
		    return $conexion;
        }
	    catch (PDOException $e){
		    return false;
	    }
        
    }

    /* Funcio que executa una sentencia  en la base de dades sense parametres */
	function executaSentencia($conexion, $sentencia){
		$statement = $conexion->prepare($sentencia);
		$statement->execute();
		return $statement->fetch(PDO::FETCH_ASSOC);
	}

    /* Funció que troba tots els resultats d'una sentencia */
	function executaSentenciaTotsResultats($conexion, $sentencia){
		$statement = $conexion->prepare($sentencia);
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}

?>