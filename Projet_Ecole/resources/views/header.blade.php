<?php

function activenav($lien){
	if($_SERVER['SCRIPT_NAME'] === $lien){
		return "active";
	}
}

function titre($nmm){
	echo "$nmm";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title><?php titre("EcolePro") ?></title>

	<link rel="shortcut icon" href="./images/gt_favicon.png">
	
<!-- 	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700"> -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	
	<link rel="stylesheet" href="./css/font-awesome.min.css">
	

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="./css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="./css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="./js/html5shiv.js"></script>
	<script src="./js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">

	<style>

		/* Scroll */

		.slidee-inn {
			max-width: 900px;
			margin: 50px auto;
			background: linear-gradient(to right, #4aa3cf93, #1c0fcc4f); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			padding: 20px;
			transform: translateX(-100%);
			opacity: 0;
			transition: transform 0.6s ease-in-out,
			opacity 0.6s ease-in-out;
		}
		.slidee-inn.active {
			transform: translateX(0%);
			opacity: 1;
		}

	</style>
	
	
	

	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom " >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<!-- <a class="navbar-brand" href="index.html"><img src="./images/logo1.png" alt="Progressus HTML5 template"></a>
				 -->
				<span style="font-size:40px">My Ecole</span>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="<?= activenav('/index.php') ?>"><a href="index.php">Accueil</a></li>
					<li class="<?= activenav('/inscription.php') ?>"><a href="inscription.php">Inscription</a></li>
					<li class="<?= activenav('/reinscription.php') ?>"><a href="reinscription.php">Réinscription</a></li>
                    <li class="<?= activenav('/scolarite.php') ?>"><a href="scolarite.php">Scolarité</a></li>
					<li class="<?= activenav('/apropos.php') ?>"><a href="apropos.php">A propos</a></li>
					<li class="<?= activenav('/login.php') ?>"><a class="btn text-primary" style="font-size:20px;" href="login.php">Login</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->
