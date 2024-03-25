
@extends("template")


@section("contenu")
	
	<!-- Chargement -->
	<div class="loaderr">
        <span class="lettree">C</span>
        <span class="lettree">H</span>
        <span class="lettree">A</span>
        <span class="lettree">R</span>
        <span class="lettree">G</span>
        <span class="lettree">E</span>
        <span class="lettree">M</span>
        <span class="lettree">E</span>
        <span class="lettree">N</span>
        <span class="lettree">T</span>
    </div>



	<style>
		

		.loaderr {
			position: absolute;
			width: 100%;
			height: 100%;
			background: #000;
			display: flex; 
			justify-content: center;
			align-items: center;
		}
		.lettree {
			color: #484848;
			font-size: 80px;
			letter-spacing: 15px;
			margin-bottom: 150px;
			animation: flash 1.2s linear infinite;
		}
		@keyframes flash {
			0% {
				color: #fff900;
				text-shadow: 0 0 7px #fff900;
			}
			90% {
				color: #484848;
				text-shadow: none;
			}
			100% {
				color: #fff900;
				text-shadow: 0 0 7px #fff900;
			}
		}

		.lettree:nth-child(1){
			animation-delay: 0.1s;
		}
		.lettree:nth-child(2){
			animation-delay: 0.2s;
		}
		.lettree:nth-child(3){
			animation-delay: 0.3s;
		}
		.lettree:nth-child(4){
			animation-delay: 0.4s;
		}
		.lettree:nth-child(5){
			animation-delay: 0.5s;
		}
		.lettree:nth-child(6){
			animation-delay: 0.6s;
		}
		.lettree:nth-child(7){
			animation-delay: 0.7s;
		}
		.lettree:nth-child(8){
			animation-delay: 0.8s;
		}
		.lettree:nth-child(9){
			animation-delay: 0.9s;
		}
		.lettree:nth-child(10){
			animation-delay: 1s;
		}

		.fondu-out {
			opacity: 0;
			transition: opacity 0.4s ease-out;
		}
	
	</style>


	<!-- Header -->
	<header id="head">
		<div class="container" style="padding-bottom:25%">
			<div class="row">
				<h1 class="lead" style="font-size:50px;padding-top:2%"><b id="bienn">BIENVENUE A L'ECOLE ! </b></h1>
				<br><br>
				<p class="tagline"><b>Voici votre établisement qui forme vos enfants en science ...</b> </p>
				<div>
					<h3 style="color:black">
					<b>C'est un grand moment pour vous. Ici vous aller apprendre de nouvelles choses
					, faire de nombreux amis et avoir des expériences inoubliables.Profiter de chaque jour et soyer ouvert à la nouveauté</b>
					</h3> <br><br>
					<h4 style="font-weight:bold;font-size:20px">Bonne chance et bienvenue !</h4>
				</div>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro --> <br>
	<div class="container alert alert-warning text-center">
		<br> <br>
		<h2 class="thin"><b>Bienvenue à l'école primaire de la rue des Amis ! <br><br></b></h2>
		<p class="text-muted">
			<center style="font-size:18px">Nous sommes une école publique située au cœur de la ville, offrant un éducation de qualité
			aux enfants de la maternelle à la cinquième année.</center>
		</p>
	</div>
	<!-- /Intro-->
		
	

	<!-- container -->
	<div class="container">

		<h2 class="text-center top-space"><b style="color:black">Quelques questions autour de notre école ?</b></h2>
		<br>

		<div class="row">
			<div class="col-sm-6  ">
				<h3><b><center>Quelles sont les heures de l'ouverture de l'école ?</center></b>	</h3>
				<p><center style="font-size:18px">Nos heures d'ouvertures sont de <b> 8h à 16h00 </b>, sauf le mercredi quand nous fermons à <b> 15h00</b> pour des 
					<b>réunions d'équipes</b>.</center>
				</p>
			</div>
			<div class="col-sm-6 alert alert-info">
				<h3><b><center>Quelles sont les options de repas scolaire disponibles ?</center></b></h3>
				<p>
					<center style="font-size:18px">Nous proposons un repas complet, sains et varié, conforme aux recommandations de l'alimentation
					équilibrée canadienne. Vous pouvez également choisir de faire apporter un repas de l'extérieur ou de venir 
					manger avec votre enfant.</center>
				</p>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="col-sm-6 alert alert-info">
				<h3><b><center>Quelles sont nos activités extra-scolaires proposées ?</center></b></h3>
				<p style="text-align:center;font-size:18px">
					Nous proposons plusieurs activités extra-scolaires, notamment <b>le club de lecture,
					le club de théâtre, le club d'arts plastiques, le club de musique et le club d'athlétisme</b>.
					Nous sommes également affilés à des clubs de sports externes tels que le <b>football, le hockey et le 
					karaté </b>
				</p>
			</div>
			<div class="col-sm-6">
				<h3><b style="text-align:center;">Quel est le taux d'approbation moyen des élèves ?</b></h3>
				<p style="font-size:18px; text-align:center">
					Notre taix d'approbation moyen est de <b>90%</b>, ce qui est supérieur à la moyenne provinciale.Nous travaillons
					dur pour <b>maintenir ce taux élevé</b> en offrant un environnement d'apprentissage stimulant et en soutenant
					les besoins individuels de chaque enfant.

				</p>
			</div>
		</div> <!-- /row -->

		<div class="jumbotron top-space slidee-inn">
			<h4>Nous disposons également de la connexion en tant qu'administrateur. Ceci vous permettra
				de se connecter en tant que membre de l'administration de l'école. Ainsi, vous pouvez y connecter 
				en cliquant le bouton ...
			</h4>
     		<p class="text-right"><a href="login.php" class="btn btn-primary btn-large">Se connecter en tant qu'administrateur »</a></p>
  		</div>

</div>	<!-- /container -->
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->


	

@endsection  



