<?php  
	//Start the session if it is not already started
		if (!isset($_SESSION)) {
			session_start();
		}
	//Start the session if it is not already started

	//Define what values will have the variable $language, which store the data about every text in the web page
		if(isset($_GET['lang']) && is_file('lang/'. $_GET['lang'] .'.php')) {
			$lang = $_GET['lang'];
		} else {
			$lang = 'spanish';
		}
		$language = require_once('lang/'. $lang .'.php');
	//Define what values will have the variable $language, which store the data about every text in the web page

	//Load Configuration with config data as an array, to be able to use the directory root parameter
		require_once('config.php');
	//Load Configuration with config data as an array, to be able to use the directory root parameter

	//Require db and user model to use the functions in this file
		require_once($config['__DOCUMENT_ROOT__'] . '/models/user.model.php');
	//Require db and user model to use the functions in this file

	//To play with the users
		$_SESSION['id_user'] = 1;
		$_SESSION['user_type'] = 'admin';
	//To play with the users
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$language ['__TITLE_APPNAME__'] ?></title>
	<!-- CSS AND FONTS -->
		<!-- Font-awesome CSS -->
			<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Font-awesome CSS -->

		<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Bootstrap CSS -->

		<!-- DataTables CSS -->
			<link rel="stylesheet" href="dataTables/DataTables-1.10.16/css/jquery.dataTables.min.css">
			<link rel="stylesheet" href="dataTables/Buttons-1.5.1/css/buttons.dataTables.min.css">
			<link rel="stylesheet" href="dataTables/FixedHeader-3.1.3/css/fixedHeader.dataTables.min.css">
			<link rel="stylesheet" href="dataTables/ColReorder-1.4.1/css/colReorder.dataTables.min.css">
			<link rel="stylesheet" href="dataTables/Responsive-2.2.1/css/responsive.dataTables.min.css">
		<!-- DataTables CSS -->

		<!-- Personal CSS -->
			<link rel="stylesheet" href="css/main.css">		
		<!-- Personal CSS -->

	<!-- CSS AND FONTS -->

	<!-- JavaScript Libraries <-->
		<!-- jQuery -->
			<script src="js/jquery-3.2.1.min.js"></script>
		<!-- jQuery -->

		<!--jQuery validate-->
			<script src="js/jquery.validate.min.js"></script>
		<!--jQuery validate-->

		<!--SweetAlert-->
			<script src="js/sweetalert.min.js"></script>
		<!--SweetAlert-->

		<!-- Bootstrap JavaScript -->
			<script src="js/bootstrap.min.js"></script>
		<!-- Bootstrap JavaScript -->

		<!-- DataTables JavaScript -->
			<script src="dataTables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
			<script src="dataTables/Buttons-1.5.1/js/dataTables.buttons.min.js"></script>
			<script src="dataTables/JSZip-2.5.0/jszip.min.js"></script>
			<script src="dataTables/pdfmake-0.1.32/pdfmake.min.js"></script>
			<script src="dataTables/pdfmake-0.1.32/vfs_fonts.js"></script>
			<script src="dataTables/Buttons-1.5.1/js/buttons.html5.min.js"></script>
			<script src="dataTables/FixedHeader-3.1.3/js/dataTables.fixedHeader.min.js"></script>
			<script src="dataTables/ColReorder-1.4.1/js/dataTables.colReorder.min.js"></script>
			<script src="dataTables/Responsive-2.2.1/js/dataTables.responsive.min.js"></script>
		<!-- DataTables JavaScript -->

		<!-- Charts.js JavaScript -->
			<script src="js/Chart.min.js"></script>
		<!-- Charts.js JavaScript -->
	<!-- JavaScript Libraries -->

</head>
<body>
	<!--HEADER-->
		<div class="header">
			<nav class="navbar navbar-inverse nav-color">
				<div class="container-fluid">
					<?php if (isLogin()): ?>
						<!-- Logout Button -->
							<a href='core/controllers/logout.controller.php'>
								<button type='button' class='btn btn-default side-button poweroff'  aria-label='Left Align'>											<span class='glyphicon glyphicon-off' 		aria-hidden='true'></span>
								</button>
								</a>
						<!-- Logout Button -->
						<?php if (isAdmin()): ?>
							
							<a href='?view=admin'>
								<button type='button' class='btn btn-default side-button'  aria-label='Left Align'>
									<span class='glyphicon glyphicon-cog' aria-hidden='true'></span>
								</button>
							</a>
						<?php endif ?>
							
					<?php endif ?>
					<a class="navbar-brand"><?= $language['__INSTITUTION_NAME__'] ?></a>
				</div>
			</nav>
		</div>
	<!--HEADER-->

	<!--CONTENT-->
		<div class="content">
			<div class="container-fluid" id="content">
				<?php 
					//We require the messages file, to be able to run messages sent via GET
						require_once($config['__DOCUMENT_ROOT__'] . '/controllers/messages.controller.php');
					//We require the messages files, to be able to run messages sent via GET

					//We assign a default value to the variable VIEW
						if (isset($_SESSION['id_user'])) {
							$view = 'default';
						} else {
							// $view = 'login';
							$view = 'default';
						}
					//We assign a default value to the variable VIEW

					//This checks if the view pass using get exist, and if the file that this view points exists
						if (isset($_GET['view']) && is_file('core/views/'. $_GET['view'] . '.view.php')) {
							$view = $_GET['view'];
						}
						// var_dump($_GET);

					//This checks if the view pass using get exist, and if the file that this view points exists

					//This checks if the actual view has a controller with that name
						if(is_file('core/controllers/' . $view . '.controller.php')){
							require_once('core/controllers/' . $view . '.controller.php');
						}
					//This checks if the actual view has a controller with that name

					//Print a home button if they are not in the default page
						if ($view != 'default' and $view != 'login') {
						?>
							<script type="text/javascript">
								$("#content").append("<a href='index.php'><span class='glyphicon glyphicon-arrow-left back' aria-hidden='true'></span></a>");
							</script>
						<?php 
						}
					//Print a home button if they are not in the default page

					//If the view in get exist we show this view
						if(is_file('core/views/' . $view . '.view.php')){
							require_once('core/views/' . $view . '.view.php');
						}

					//If the view in get exist we show this view
					
					// var_dump($_SESSION['id_user']);
				?>
			</div>
		</div>
	<!--CONTENT-->

	<!--FOOTER-->
		<footer>
			<nav class="navbar navbar-inverse navbar-fixed-bottom">
				<div class="container-fluid">
					<p class="navbar-text"><?= $language['__SIGN__']?></p>
					<a class="navbar-brand"><?= $language['__INSTITUTION_NAME__']?></a>  	
				</div>
			</nav>
		</footer>
	<!--FOOTER-->

	<!-- Personal JavaScript -->
		<script src="js/main.js"></script>
	<!-- Personal JavaScript -->
</body>
</html>