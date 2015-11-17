<!DOCTYPE html>
<html>
	<head>
		<title>Bagcrush</title>
		<link rel="stylesheet" type="text/css" href="css/bagcrush.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bagcrush.js"></script>
	</head>
	<body>
		<?php include ('structure/header.php'); ?>
		<div id="content">
		<?php
			if(isset($_GET['page'])) {
				switch($_GET['page']) {
					case 'recherche' : include('pages/recherche.php'); break;
					default : include('pages/404.php');
				}
			}
			else include('pages/accueil.php');
		?>
		</div>
		<?php include ('structure/footer.php'); ?>
	</body>
</html>