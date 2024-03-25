<?php

function activenav($lien){
	if($_SERVER['REQUEST_URI'] === $lien){
		return "active";
	}
}

/* ?> <br><br><br><br><?php
echo "<pre>";
print_r($_SERVER);
echo "</pre>"; */

function titre(){
	if($_SERVER['REQUEST_URI']=== "/"){
		return "EcolePro";
	}
	if($_SERVER['REQUEST_URI']=== "/inscription"){
		return "Inscription";
	}
	if($_SERVER['REQUEST_URI']=== "/reinscription"){
		return "Réinscription";
	}
	if($_SERVER['REQUEST_URI']=== "/scolarite"){
		return "scolarité";
	}
	if($_SERVER['REQUEST_URI']=== "/apropos"){
		return "Apropos";
	}
	if($_SERVER['REQUEST_URI']=== "/login"){
		return "Login";
	}
	
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title><?= titre() ?></title>
	
	

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
					<li class="<?= activenav('/') ?>"><a href="/">Accueil</a></li>
					<li class="<?= activenav('/inscription') ?>"><a href="inscription">Inscription</a></li>
					<li class="<?= activenav('/reinscription') ?>"><a href="reinscription">Réinscription</a></li>
                    <li class="<?= activenav('/scolarite') ?>"><a href="scolarite">Scolarité</a></li>
					<li class="<?= activenav('/apropos') ?>"><a href="apropos">A propos</a></li>
					<li class="<?= activenav('/login') ?>"><a class="btn text-primary" style="font-size:20px;" href="login">Login</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->






	@yield("contenu")







	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+229 98754112<br>
								<a href="mailto:#">ecolepro.email@yahoo.com</a><br>
								<br>
								234 Hidden Pond Road, Ashland City, TN 37015
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Text widget</h3>
						<div class="widget-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
							<p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					Lorem ipsum dolor sit amet consectetur adipisicing elit.
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="index.php">Home</a> | 
								<a href="aprpos.php">About</a> |
								<b><a href="login.php">Login</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2014, Your name. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>



</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="js/typewriterJs.js"></script>

	<script language="JavaScript">
		/* Chargement */
		const loader = document.querySelector('.loaderr');

		window.addEventListener('load', () => {

			loader.classList.add('fondu-out');

		})

		/* Scroll Texte */
		const slidingNewsletter = document.querySelector('.slidee-inn');

		window.addEventListener('scroll', () => {

			const {scrollTop, clientHeight} = document.documentElement;

			// console.log(scrollTop, clientHeight);

			const topElementToTopViewport = slidingNewsletter.getBoundingClientRect().top;

			console.log(topElementToTopViewport);

			if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.8){
				slidingNewsletter.classList.add('active')
			}
		})


		/* Type Writer */

		const txtAnim = document.querySelector('#bienn');


		new Typewriter(txtAnim, {
			//loop: true,
			deleteSpeed: 50 
		})
		.changeDelay(80)
		.typeString('BIENVENUE A L\'ECOLE DE ... <br>')
		.pauseFor(400)
		.typeString('<strong style="color:#ff6910;"> DISCIPLINE ! </strong>')
		.pauseFor(1000)
		.deleteChars(13)
		.typeString('<span style="color: #27ae60;"> TRAVAIL ! </span>')
		.pauseFor(1000)
		.deleteChars(11)
		.typeString('<span style="color: midnightblue;"> SUCESS ! </span>')
		.pauseFor(1000)

		.start()
	</script>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="./js/headroom.min.js"></script>
	<script src="./js/jQuery.headroom.min.js"></script>
	<script src="./js/template.js"></script>
	<script src="./js/respond.min.js"></script>
</body>
</html>
    
