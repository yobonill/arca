<?php
	//------------Require the database model that connects to our database------------
		require_once 'db.model.php';
	//------------Require the database model that connects to our database------------

	//Define Timezone
		date_default_timezone_set('America/Santo_Domingo');	
	//Define Timezone

	//------------Function to get several reports data from database ------------
		function select_visitors($bDate, $aDate){

			//Create a variable that contains the query that log in the page
				$query = "SELECT * FROM visitantes WHERE fecha_registro BETWEEN '" . $bDate . "' AND '" . $aDate . "' ORDER BY fecha_seguimiento DESC";
			//Create a variable that contains the query that log in the page

			//Run the query and assign it to the variable result
				$result = db_select($query);
			//Run the query and assign it to the variable result

			//Check if the query ran correctly, if not return the error
				if($result === false) {
					$error = db_error();
					echo $error;
				} else {
					return $result;
				}
			//Check if the query ran correctly, if not return the error
		}
	//------------Function  to get several reports data from database ------------

	//------------Function to update bills status ------------
		function update_bills($billid,$billType = 'dispatch'){

			switch ($billType) {
                case 'dispatch':
                    //Create a variable that contains the query that log in the page
					    $query = "UPDATE facturacion SET facturacion.estatus_factura = 1 WHERE id_factura = '$billid'";
				    //Create a variable that contains the query that log in the page
                break;

                case 'pack':
                    //Create a variable that contains the query that log in the page
					    $query = "";
				    //Create a variable that contains the query that log in the page
                break;
            }

			//Run the query and assign it to the variable result
				$result = db_query($query);
			//Run the query and assign it to the variable result

			//Check if the query ran correctly, if not return the error
				if($result === false) {
					$error = db_error();
					echo $error;
				} else {
					return $result;
				}
			//Check if the query ran correctly, if not return the error
		}
	//------------Function to update bills status ------------
?>