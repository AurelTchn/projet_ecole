

<?php 
use Illuminate\Support\Facades\DB;

$danslabase = false;
$userincorrecte = "";
$passincorrecte = "Vous n'êtes pas un membre d'administration.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>EcolePro</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
	

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<?php

	$passwordAdministration = "azerty123";

	if(isset($_POST['password_admin'])){

	
	if($_POST['password_admin'] == $passwordAdministration){
		/* Récupération des données envoyées par l'utilisateur */
		$user = $_POST['username'];
		$titre = $_POST['titre_admin'];
		$password = $_POST['passwordd'];


		/* Insertion dans la base de données  */
/* 
		$requte = $connexion->prepare("INSERT INTO admin(titre_admin,username,passwordd)
		VALUES(:titre_admin,:username,:passwordd)");

		$requte->bindParam(':titre_admin',$titre);
		$requte->bindParam(':username',$user);
		$requte->bindParam(':passwordd',$password);

		$requte->execute(); ?> */

		$requete = DB::table('admin')->insert([
			'titre_admin' => $titre,
			'username' => $user,
			'passwordd' => $password,
			
			]); ?>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-top headroom " >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<!-- a class="navbar-brand" href="index.html"><img src="assets/images/logo1.png" alt="Progressus HTML5 template"></a> -->
				
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="login.php"><input type="submit" value="Déconnexion" class="btn solid" /></a></li>
					
				</ul>
				
				<ul class="nav navbar-nav pull-left">
					<li class="active"><a href="inscription_admin.php"><input type="submit" value="Incription" class="btn solid" /></a></li>
					
				</ul>
				
			</div><!--/.nav-collapse --> <br>
			<center><span>Vous êtes connecté en tant que : 
			 <b style="color:white"><?= $user ?> </b> 
			au poste <b style="color:white"><?= $titre ?></b> de l'administration  </span></center>
		</div>
	</div> 
	<!-- /.navbar -->
	
	

<!-- Intro -->
<div class="container text-center">
		<br> <br>
		<h2 class="thin">The best place to tell people why they are here</h2>
		<p class="text-muted">
			The difference between involvement and commitment is like an eggs-and-ham breakfast:<br> 
			the chicken was involved; the pig was committed.
		</p>
	</div>
	<!-- /Intro-->


    <!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin">Reasons to use this template</h3>
			
			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i><button class="btn btn-action btn-lg">Saisie note</button></h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aliquid adipisci aspernatur. Soluta quisquam dignissimos earum quasi voluptate. Amet, dignissimos, tenetur vitae dolor quam iusto assumenda hic reprehenderit?</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-flash fa-5"></i><button class="btn btn-action btn-lg">Modifier note</button></h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, commodi, sequi quis ad fugit omnis cumque a libero error nesciunt molestiae repellat quos perferendis numquam quibusdam rerum repellendus laboriosam reprehenderit! </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-heart fa-5"></i><button class="btn btn-action btn-lg">Moyenne</button></h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, vitae, perferendis, perspiciatis nobis voluptate quod illum soluta minima ipsam ratione quia numquam eveniet eum reprehenderit dolorem dicta nesciunt corporis?</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i><button class="btn btn-action btn-lg">Statistique</button></h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, excepturi, maiores, dolorem quasi reprehenderit illo accusamus nulla minima repudiandae quas ducimus reiciendis odio sequi atque temporibus facere corporis eos expedita? </p>
					</div>
				</div>
			</div> <!-- /row  -->
		
		</div>
	</div> 
	<!-- /Highlights --> <?php


}}if(!empty($_POST['login'])){
	
	$resul = DB::select("SELECT * from admin");
	

	foreach($resul as $info){
		$nm_user = $info->username;
		$pass = $info->passwordd;
		if($nm_user == $_POST['signin_user']){
			if($pass == $_POST['signin_password']){
				$danslabase=true ; ?>
				<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-top headroom " >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo1.png" alt="Progressus HTML5 template"></a> -->
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="login.php"><input type="submit" value="Déconnexion" class="btn solid" /></a></li>
					
				</ul>
				
				<ul class="nav navbar-nav pull-left">
					<li class="active"><a href="inscription_admin.php"><input type="submit" value="Inscrire un élève" class="btn solid" /></a></li>
					
				</ul>
			</div><!--/.nav-collapse -->
			<?php
					$us = $_POST['signin_user'];
					$re = DB::select("SELECT titre_admin
					FROM admin
					WHERE username=\"$us\";");
					
					$tit = $re[0]->titre_admin;

			?> <br>
			<center><span>Vous êtes connecté en tant que : 
			 <b style="color:white"><?= $_POST['signin_user'] ?></b>, au poste
			 <b style="color:white"><?= $tit ?> </b> de l'administration  </span></center>
		</div>
	</div> 
	<!-- /.navbar -->

<!-- Intro -->
<div class="container text-center">
		<br> <br>
		<h2 class="thin">The best place to tell people why they are here</h2>
		<p class="text-muted">
			The difference between involvement and commitment is like an eggs-and-ham breakfast:<br> 
			the chicken was involved; the pig was committed.
		</p>
	</div>
	<!-- /Intro-->


    <!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin">Reasons to use this template</h3>
			
			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i><button class="btn btn-action btn-lg">Saisie note</button></h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aliquid adipisci aspernatur. Soluta quisquam dignissimos earum quasi voluptate. Amet, dignissimos, tenetur vitae dolor quam iusto assumenda hic reprehenderit?</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-flash fa-5"></i><button class="btn btn-action btn-lg">Modifier note</button></h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, commodi, sequi quis ad fugit omnis cumque a libero error nesciunt molestiae repellat quos perferendis numquam quibusdam rerum repellendus laboriosam reprehenderit! </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-heart fa-5"></i><button class="btn btn-action btn-lg">Moyenne</button></h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, vitae, perferendis, perspiciatis nobis voluptate quod illum soluta minima ipsam ratione quia numquam eveniet eum reprehenderit dolorem dicta nesciunt corporis?</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i><button class="btn btn-action btn-lg">Statistique</button></h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, excepturi, maiores, dolorem quasi reprehenderit illo accusamus nulla minima repudiandae quas ducimus reiciendis odio sequi atque temporibus facere corporis eos expedita? </p>
					</div>
				</div>
			</div> <!-- /row  -->
		
		</div>
	</div> 
	<!-- /Highlights --><?php
			}else{
				$passincorrecte = "Votre mot de passe est incorrecte."; 
			}
		}?>
			
			<?php
		
	}
}if((isset($_POST['signup']) && $_POST['password_admin'] !== $passwordAdministration) || (isset($_POST['login']) && $danslabase == false)){ ?>

	

	<br><br><br><br><br>
	<?php /* include "header.php" */ ?>

	@extends('template')

	@section('contenu')
		<div class="alert alert-danger">
			<center><h2><b>Erreur de connexion !</b></h2></center>
		</div> 
		<div class="alert alert-info"> 
			<center><h4><b><?= $passincorrecte?></b></h4></center>
		</div>
	@endsection

	

	

	<?php
}

?>




