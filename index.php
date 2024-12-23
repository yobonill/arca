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
		//$_SESSION['id_user'] = 1;
		//$_SESSION['user_type'] = 'admin';
	//To play with the users
?>

<!DOCTYPE html>
<html lang='es'>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<title><?=$language ['__TITLE_APPNAME__'] ?></title>
	<!-- CSS AND FONTS -->
		<!-- Font-awesome CSS -->
			<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Font-awesome CSS -->

		<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Bootstrap CSS -->

		<?php
			if(isset($_GET['view'])){
				$view = $_GET['view'];
				if($view == 'reportVisitantes'){
					?>
						<!-- DataTables CSS -->
							<link rel="stylesheet" href="dataTables/DataTables-1.10.16/css/jquery.dataTables.min.css">
							<!-- <link rel="stylesheet" href="dataTables/Buttons-1.5.1/css/buttons.dataTables.min.css"> -->
							<link rel="stylesheet" href="dataTables/FixedHeader-3.1.3/css/fixedHeader.dataTables.min.css">
							<!-- <link rel="stylesheet" href="dataTables/ColReorder-1.4.1/css/colReorder.dataTables.min.css"> -->
							<link rel="stylesheet" href="dataTables/Responsive-2.2.1/css/responsive.dataTables.min.css">
						<!-- DataTables CSS -->
					<?php
				}

				//This checks if the actual view has a css with that name
					if(is_file('css/' . $view . '.css')){
						?>
							<link rel="stylesheet" href="css/<?=$view?>.css">	
						<?php
					}
				//This checks if the actual view has a css with that name
			}
		?>

		<?php
			if(isset($_GET['view'])){
				if($_GET['view'] == 'visitante'){
					?>
						<!-- RadioButton CSS -->
							<link rel="stylesheet" href="css/radioStyle.css">	
						<!-- RadioButton CSS -->
					<?php
				}
			}
		?>
		<!-- Personal CSS -->
			<link rel="stylesheet" href="css/general.css">		
		<!-- Personal CSS -->

	<!-- CSS AND FONTS -->

	<!-- JavaScript Libraries <-->
		<!-- jQuery -->
			<script src="js/jquery-3.2.1.min.js"></script>
		<!-- jQuery -->
		<?php
			if(isset($_GET['view'])){
				if($_GET['view'] == 'reports'){
					?>
						<!--jQuery validate-->
							<script src="js/jquery.validate.min.js"></script>
						<!--jQuery validate-->
					<?php
				}
			}
		?>
		
		<?php
			if(isset($_GET['msj'])){
				?>
					<!--SweetAlert-->
						<script src="js/sweetalert.min.js"></script>
					<!--SweetAlert-->
				<?php
				
			}
		?>

		<!-- Bootstrap JavaScript -->
			<script src="js/bootstrap.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<?php
			if(isset($_GET['view'])){
				if($_GET['view'] == 'reportVisitantes'){
					?>
						<!-- DataTables JavaScript -->
							<script src="dataTables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
							<!-- <script src="dataTables/Buttons-1.5.1/js/dataTables.buttons.min.js"></script> -->
							<script src="dataTables/JSZip-2.5.0/jszip.min.js"></script>
							<!-- <script src="dataTables/pdfmake-0.1.32/pdfmake.min.js"></script>
							<script src="dataTables/pdfmake-0.1.32/vfs_fonts.js"></script>
							<script src="dataTables/Buttons-1.5.1/js/buttons.html5.min.js"></script> -->
							<script src="dataTables/FixedHeader-3.1.3/js/dataTables.fixedHeader.min.js"></script>
							<!-- <script src="dataTables/ColReorder-1.4.1/js/dataTables.colReorder.min.js"></script> -->
							<script src="dataTables/Responsive-2.2.1/js/dataTables.responsive.min.js"></script>
						<!-- DataTables JavaScript -->

						<!-- Charts.js JavaScript -->
							<script src="js/Chart.min.js"></script>
						<!-- Charts.js JavaScript -->
					<?php
				}
			}
		?>
	<!-- JavaScript Libraries -->

</head>
<body>
	<!--HEADER-->
		<div class="header">
			<nav class="navbar navbar-inverse nav-color">
				<div class="container-fluid">
					<!-- Reports Button -->
						<?php 

							if(isset($_GET['view'])):
								$view = $_GET['view'];
								switch ($view):
								case "visitante":
						?>	
							<a href='?view=reportVisitantes'>
								<button type='button' class='btn btn-default side-button'  aria-label='Left Align' title="reporte">
								<span class='glyphicon glyphicon-list-alt' aria-hidden='true' ></span>
								</button>
							</a>
						<?php
							break;
							
							default:
								
							break;

							endswitch;
							endif;
						?>
					<!-- Reports Button -->
						<?php if(isLogin()): ?>
							<a href='#' class='btn btn-default side-button' data-toggle ="modal">
								<span class='glyphicon glyphicon-user' aria-hidden='true'><?= ' ' . $_SESSION['name'] . ' ' . $_SESSION['lastname']  ?></span>
							</a>
						<?php else: ?>
							<a href='#login-modal' class='btn btn-default side-button' data-toggle ="modal">
								<span class='glyphicon glyphicon-user' aria-hidden='true'><?= $language['__LOGIN_LOGIN__']?></span>
							</a>
							<!-- Login Modal -->
								<div class="modal fade" id="login-modal">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											</div>
											<div class="modal-body">
												<form action="#" method="POST" class="form-horizontal" role="form">
													<h3 class="text-center"><?= $language['__TITLE_LOGIN__'] ?></h3>
													<hr>
													<div class="row">
														<div class="col-md-4 col-xs-4"></div>
														<div class="col-md-4 col-xs-4 text-center">
															<label for="usr"><?= $language['__USERNAME_LOGIN__'] ?></label>
															<input type="text" name="user" id="inputUsr" class="form-control text-center" value="" required="required">
														</div>
														<div class="col-md-4 col-xs-4"></div>
													</div>
													<div class="row">
														<div class="col-md-4 col-xs-4"></div>
														<div class="col-md-4 col-xs-4 text-center">
															<label for="pass"><?= $language['__USERPASS_LOGIN__'] ?></label>
															<input type="password" name="pass" id="inputPass" class="form-control text-center" value="" required="required">
														</div>
														<div class="col-md-4 col-xs-4"></div>
													</div>
													<br>
													<div class="form-group">
														<div class="col-md-4 col-xs-4"></div>
														<div class="col-md-4 col-xs-4 text-center">
															<button type="submit" class="btn btn-primary"><?= $language['__LOGIN_LOGIN__'] ?></button>
														</div>
														<div class="col-md-4 col-xs-4"></div>
													</div>
												</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-danger redBgScheme" data-dismiss="modal"><?= $language['__CLOSE_MODAL__'] ?></button>
											</div>
										</div>
									</div>
								</div>
							<!-- Login Modal -->
						<?php endif ?>
					<!-- LOGIN BUTTON -->
					<?php if (isLogin()): ?>
						<!-- Logout Button -->
							<a href='core/controllers/logout.controller.php'>
								<button type='button' class='btn btn-default side-button poweroff whiteScheme'  aria-label='Left Align'>											<span class='glyphicon glyphicon-off' 		aria-hidden='true'></span>
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
					<a class="navbar-brand"><?= $language['__INSTITUTION_NAME__']?></a>
					<!-- <a class="navbar-brand"><img class="img-responsive"src="img/Logo.png" alt="<?= $language['__INSTITUTION_NAME__'] ?>"></a> -->
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
								$("#content").append("<a href='index.php?view=default'><span class='glyphicon glyphicon-arrow-left back' aria-hidden='true'></span></a>");
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
					<!-- <p class="navbar-text"><?= $language['__SIGN__']?></p> -->
					<a class="navbar-brand"><?= $language['__INSTITUTION_NAME__']?></a>  	
				</div>
			</nav>
		</footer>
	<!--FOOTER-->
	<?php
		if(isset($_GET['view'])):
			$view = $_GET['view'];
			if(is_file('js/' . $view . '.js')):
				?>
					<script src="js/<?=$view?>.js">	</script>
				<?php
			endif;
		endif;
	?>

		<!-- Personal JavaScript -->
			<script src="js/general.js"></script>
		<!-- Personal JavaScript -->
</body>
</html>