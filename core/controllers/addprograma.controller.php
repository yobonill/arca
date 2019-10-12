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
        if(isset($_POST['oracion'])){
                $fecha = $_POST['fecha'];

                for ($i=0; $i < 9; $i++) { 
                    if(isset($_POST['orden'.$i])){
                        switch ($_POST['orden'.$i]) {
                            case 'oracion':
                                $nombre = $_POST['oracion'];
                                $data1 = isset($_POST['verOracion1']) ? $_POST['verOracion1']: "";
                                $data2 = isset($_POST['verOracion2']) ? $_POST['verOracion2']: "";
                                $data3 = isset($_POST['verOracion3']) ? $_POST['verOracion3']: "";
                                $orden = $i;
                                $agregar_programa = agregar_programa($fecha, $nombre, $orden, $data1, $data2, $data3);
                            break;
                            case 'adoracion':
                                $nombre = $_POST['adoracion'];
                                $data1 = isset($_POST['adoracion1']) ? $_POST['adoracion1']: "";
                                $data2 = isset($_POST['adoracion2']) ? $_POST['adoracion2']: "";
                                $data3 = isset($_POST['adoracion3']) ? $_POST['adoracion3']: "";
                                $data4 = isset($_POST['adoracion4']) ? $_POST['adoracion4']: "";
                                $orden = $i;
                                $agregar_programa = agregar_programa($fecha, $nombre, $orden, $data1, $data2, $data3, $data4);
                            break;
                            case 'anuncios':
                                $nombre = $_POST['anuncios'];
                                $data1 = isset($_POST['anuncio1']) ? $_POST['anuncio1']: "";
                                $data2 = isset($_POST['anuncio2']) ? $_POST['anuncio2']: "";
                                $data3 = isset($_POST['anuncio3']) ? $_POST['anuncio3']: "";
                                $data4 = isset($_POST['anuncio4']) ? $_POST['anuncio4']: "";
                                $data5 = isset($_POST['anuncio5']) ? $_POST['anuncio5']: "";
                                $data6 = isset($_POST['anuncio6']) ? $_POST['anuncio6']: "";
                                $orden = $i;
                                $agregar_programa = agregar_programa($fecha, $nombre, $orden, $data1, $data2, $data3,$data4,$data5,$data6);
                            break;
                            case 'ofrenda':
                                $nombre = $_POST['oracion'];
                                $data1 = isset($_POST['verOracion1']) ? $_POST['verOracion1']: "";
                                $data2 = isset($_POST['verOracion2']) ? $_POST['verOracion2']: "";
                                $data3 = isset($_POST['verOracion3']) ? $_POST['verOracion3']: "";
                                $orden = $i;
                               // $agregar_programa = agregar_programa($fecha, $nombre, $orden, $data1, $data2, $data3);
                            break;
                            case 'predica':
                                $nombre = $_POST['oracion'];
                                $data1 = isset($_POST['verOracion1']) ? $_POST['verOracion1']: "";
                                $data2 = isset($_POST['verOracion2']) ? $_POST['verOracion2']: "";
                                $data3 = isset($_POST['verOracion3']) ? $_POST['verOracion3']: "";
                                $orden = $i;
                               // $agregar_programa = agregar_programa($fecha, $nombre, $orden, $data1, $data2, $data3);
                            break;
                            case 'extra1':
                                $nombre = $_POST['oracion'];
                                $data1 = isset($_POST['verOracion1']) ? $_POST['verOracion1']: "";
                                $data2 = isset($_POST['verOracion2']) ? $_POST['verOracion2']: "";
                                $data3 = isset($_POST['verOracion3']) ? $_POST['verOracion3']: "";
                                $orden = $i;
                               // $agregar_programa = agregar_programa($fecha, $nombre, $orden, $data1, $data2, $data3);
                            break;
                            case 'extra2':
                                $nombre = $_POST['oracion'];
                                $data1 = isset($_POST['verOracion1']) ? $_POST['verOracion1']: "";
                                $data2 = isset($_POST['verOracion2']) ? $_POST['verOracion2']: "";
                                $data3 = isset($_POST['verOracion3']) ? $_POST['verOracion3']: "";
                                $orden = $i;
                               // $agregar_programa = agregar_programa($fecha, $nombre, $orden, $data1, $data2, $data3);
                            break;
                            case 'extra3':
                                $nombre = $_POST['oracion'];
                                $data1 = isset($_POST['verOracion1']) ? $_POST['verOracion1']: "";
                                $data2 = isset($_POST['verOracion2']) ? $_POST['verOracion2']: "";
                                $data3 = isset($_POST['verOracion3']) ? $_POST['verOracion3']: "";
                                $orden = $i;
                               // $agregar_programa = agregar_programa($fecha, $nombre, $orden, $data1, $data2, $data3);
                            break;
                            case 'extra4':
                                $nombre = $_POST['oracion'];
                                $data1 = isset($_POST['verOracion1']) ? $_POST['verOracion1']: "";
                                $data2 = isset($_POST['verOracion2']) ? $_POST['verOracion2']: "";
                                $data3 = isset($_POST['verOracion3']) ? $_POST['verOracion3']: "";
                                $orden = $i;
                               // $agregar_programa = agregar_programa($fecha, $nombre, $orden, $data1, $data2, $data3);
                            break;
                            
                            default:
                                # code...
                                break;
                        }
                    } 
                }
               
               //$agregar_programa = agregar_programa();
        }
        // $agregar_programa = agregar_programa();
        var_dump($_POST);
		// if($agregar_programa) {
		// 	header("Location: ../../?view=default&msj=recordadded");
		// } else {
		// 	echo $agregar_programa;
		// }
	//Run the function that bring several tables data from the database
?>
