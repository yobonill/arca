<?php
	//Start the session if it is not already started
		if (!isset($_SESSION)) {
			session_start();
		}
	//Start the session if it is not already started

	//Load Configuration with config data as an array, to be able to use the directory root parameter
		require_once($_SERVER['DOCUMENT_ROOT'] . '/arca/config.php');
	//Load Configuration with config data as an array, to be able to use the directory root parameter

	//Add all the relevant files to be able to use the functions
		require_once ($config['__DOCUMENT_ROOT__'] . '/models/admin.model.php');
    //Add all the relevant files to be able to use the functions
    
	//Run the function that bring several tables data from the database
		$agregar_visitante = agregar_visitante();
		if($agregar_visitante) {
			header("Location: ../../?view=default&msj=recordadded");
		} else {
			echo $agregar_visitante;
		}
	//Run the function that bring several tables data from the database
?>
