<?php
	//Start the session if it is not already started
		if (!isset($_SESSION)) {
			session_start();
		}
	//Start the session if it is not already started

	//Add all the relevant files to be able to use the functions
		require_once ($config['__DOCUMENT_ROOT__'] . '/models/reports.model.php');
    //Add all the relevant files to be able to use the functions
    
	//Run the function that bring several tables data from the database
	    if(isset($_POST['beforeDate'])){
			$_SESSION['deliveryBDate'] = $_POST['beforeDate'];
			$_SESSION['deliveryADate'] = $_POST['afterDate'];
			$bDate = $_SESSION['deliveryBDate'];
			$aDate = $_SESSION['deliveryADate'];
			$records = select_visitors($bDate,$aDate);
		} elseif (isset($_SESSION['deliveryBDate'])){
			$bDate = $_SESSION['deliveryBDate'];
			$aDate = $_SESSION['deliveryADate'];
			$records = select_visitors($bDate,$aDate);
		} else {
			$bDate = date('Y-m-d');
			$aDate = date('Y-m-d');
			$records = select_visitors($bDate,$aDate);
			echo "else";
			var_dump($records);
		}

	//Run the function that bring several tables data from the database
?>