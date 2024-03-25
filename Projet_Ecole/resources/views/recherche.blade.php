@php
	use Illuminate\Support\Facades\DB;


@endphp



@extends("template")

@section("contenu")


{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinscription</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css"> --}}


	
	<script language="Javascript">
		
        /* window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0); 
        }); */
		
		
		
	    

	</script>


</head>





<body>

	<style>
		body * {
			font-family: "Times New Roman";
		
		}
		
	</style>

	<!-- <center>
		<a href="./index.php">
			<button type="submit" name="submit_effacer" class="btn btn-primary">
				<h5> <b>Retourner à la page d'accueil</b></h5>
			</button>
		</a>
	</center>
	<hr> -->

	<!-- <header>
        <a href="#" class="logo">MyEcole</a>
        <ul>
            <li><a href="index.php" >Accueil</a></li>
            <li><a href="scolarité" >Scolarité</a></li>
			<li><a href="inscription.php" class="btn btn-primary"><b>Inscription</b></a></li>
    
        </ul>
        <section class="banner"></section>
    </header> -->

    

		

<?php

	/* Récupération du matricule entré par l'utilisateur */
	
	$mat_user = $_POST["matuser"];
	
	$rq = DB::select("SELECT * FROM eleves WHERE mat_eleve='$mat_user'");

	/* $requet = $connexion->prepare("SELECT * FROM eleve WHERE mat_eleve='$mat_user'");
	$requet->execute(); */

	// $result = $requet->fetchall();

	

	if(empty($rq)){
		?><br><br><b><br><br><br></b> <div class="alert alert-danger">
		<h1><b><center>Matricule non trouvé !</center></b></h1></div>
		<div class="alert alert-info">
			<h4> <center>Le matricule <b><?= $mat_user ?></b> n'est pas retrouvé dans le base.
				Il se peut que l'élève n'est pas encore inscrit dans cet établissement.
			</center> </h4>
			
		</div>
		<div class="alert alert-info">
			<center><h4>Cliquer sur l'onglet <b>Inscription</b> pour inscrire votre enfant .</h4></center>
		</div><?php
	}else{
		
		
		foreach($rq as $info_perso){
			/* Récupération des données du parent */
			$nom_parent = $info_perso->nom_parent;
			$prenom_parent = $info_perso->prenom_parent;
			$profession_parent = $info_perso->profession_parent;
			$contact = $info_perso->num_parent;
			$email_parent = $info_perso->email_parent;
			$statut = $info_perso->statut_parent;

			/* Récupération des données de l'élève */
			$nom_eleve = $info_perso->nom;
			$prenom_eleve = $info_perso->prenom;
			$date_naissance = $info_perso->date_de_naissance;
			$genre = $info_perso->sexe;
			$clas = $info_perso->code_classe;
			$classerie = $info_perso->serie;
			$classe = $clas." ".$classerie;
			$apte = $info_perso->apte_sport;
			$personne_contacter = $info_perso->personne_contacter;
			$adresse_eleve = $info_perso->adresse_eleve;
			$ecole_provenance = $info_perso->ecole_de_provenance;
			
			
		}
		
		

		if($clas != "Tle"){
			$res = DB::select("SELECT DISTINCT numordre 
			FROM classes
			WHERE code_classe='$clas';");
			


			$nbrclasse = $res[0]->numordre;
			
			$nbrclasse += 1;
			

			$resu = DB::select("SELECT DISTINCT code_classe 
			FROM classes
			WHERE numordre='$nbrclasse';");

			

			$laclasse = $resu[0]->code_classe;

			

			$classe = $laclasse." ".$classerie ;

			/* echo "$laclasse"; */
		}

		
		
		




		?>





	
	


	<br><br><br><br>
	<div class="alert alert-warning">
		<center>
			<h1> <b style="font-size:30px ">Bienvenue sur la page de réincription de votre enfant !</b> </h1>
		</center>
	</div>
	<center style="font-size:20px ">
		Pour ce fait, vérifier l'exactitude des informations affichées.
	</center> <br>

	<form action="traitement_reinscri" name="form1" method="POST" class="container" enctype="multipart/form-data">
		@method('POST')
		@csrf
		<fieldset width="75%" name="fieldset" class="scheduler-border">
			<legend class="scheduler-border"><b><u style="color:blue;font-size:25px">Informations Parents/Tuteurs:</u></b></legend>

			<div class="row">
				<div class="col-lg-4">
					<label for="nom" style="font-size:20px; font-weight:bold;color:black "> <b> Nom du Parent: </b></label>
					<input style="font-size:20px;" type="text" value="<?= $nom_parent ?>"  id="nom"  placeholder="Entrer votre nom" name="nom" required class="form-control aa">

				</div>
				<div class="col-lg-4">
					<label for="prenom" style="font-size:20px; font-weight:bold;color:black "><b>Prénom du Parent:</b> </label>
					<input style="font-size:20px;" type="text" id="prenom" value="<?= $prenom_parent ?>"    placeholder="Entrer votre prenom" name="prenom" required class="form-control bb">

				</div>
				<div class="col-lg-4">
					<label for="profession" style="font-size:20px; font-weight:bold;color:black "><b>Profession du Parent:</b> </label>
					<input style="font-size:20px;" type="text" id="profession" value="<?= $profession_parent ?>"    name="profession" placeholder="Votre profession" required class="form-control cc">

				</div>
			</div>
			

			<br>
			<div class="row">
				<div class="col-lg-4 mt-4">
					<label for="contact" style="font-size:20px; font-weight:bold;color:black "><b>Contact:</b></label>
					<input style="font-size:20px" type="tel" name="contact" value="<?= $contact ?>"  id="contact"   required placeholder="Contact" class="form-control dd">
				</div>

				<div class="col-lg-4 mt-4">
					<label for="email" style="font-size:20px; font-weight:bold;color:black "><b>E-mail:</b> </label>
					<input style="font-size:20px" type="email" value="<?= $email_parent ?>"  name="email" id="email"   placeholder="Votre E-mail" class="form-control ee" required>
				</div>
				
				<div class="col-lg-4 mt-4">
					<label for="statut" style="font-size:20px; font-weight:bold;color:black "><b>Statut:</b></label><br>
					<?php function statut($ap, $val){
							$chaine = "";
							if($ap == $val){
								$chaine .= "selected";
							}
							return $chaine;
					} ?>
					<select name="statut" style="font-size:20px" class="form-control" id="">
						<option value="Papa" <?= statut("Papa",$statut) ?>>Papa</option>
						<option value="Maman" <?= statut("Maman",$statut) ?>>Maman</option>
						<option value="Tuteur" <?= statut("Tuteur",$statut) ?>>Tuteur</option>
						<option value="Tutrice" <?= statut("Tutrice",$statut) ?>> Tutrice</option>
					</select>
				</div>



			</div>

			<br> <br>

			<legend class="scheduler-border"><b><u style="color:blue;">Informations Élève:</u></b></legend>

			<div class="row">
				<div class="col-lg-6">
					<label for="matricule" style="font-size:20px; font-weight:bold;color:black "> <b> Matricule: </b></label>
					<input style="font-size:20px;" value="<?= $mat_user ?>" readonly  type="number" id="matricule" name="matricule" required class="form-control ff">

				</div>
				<div class="col-lg-6">
					<label for="nom" style="font-size:20px; font-weight:bold;color:black "> <b> Nom: </b></label>
					<input style="font-size:20px;" value="<?= $nom_eleve ?>" readonly  type="text" id="nom_eleve" placeholder="Entrer votre nom"  name="nom_eleve" required class="form-control ff">

				</div>
				
			</div>


			<br> 
			<div class="row">
				<div class="col-lg-6 mt-4">
					<label for="prenom" style="font-size:20px; font-weight:bold;color:black "><b>Prénom:</b> </label>
					<input style="font-size:20px;" value="<?= $prenom_eleve ?>" readonly type="text" id="prenom_eleve" placeholder="Entrer votre prenom"  name="prenom_eleve" required class="form-control gg">

				</div>
				
				<div class="col-lg-6 mt-4">
					<label for="date_de_naissance" style="font-size:20px; font-weight:bold;color:black "><b>Date de naissance:</b> </label>
					<input style="font-size:20px" value="<?= $date_naissance ?>" readonly type="date" id="date_de_naissance" name="date_de_naissance" required class="form-control">

				</div>

				
				
			</div>
			<br>
			
			<div class="row">
				<div class="col-lg-6 mt-4">
					<label for="sexe" style="font-size:20px; font-weight:bold;color:black "><b>Genre:</b></label>
					<input type="text" style="font-size:20px" name="sexe" readonly value="<?= $genre ?>"  class="form-control">
				</div>
				
				<div class="col-lg-6 mt-4">
					<label for="classe" style="font-size:20px; font-weight:bold;color:black "><b>Classe:</b></label> <br>
					<?php $listeserie = DB::select("SELECT classes.serie
						FROM classes
						WHERE classes.code_classe='$laclasse'");
						
						
						
						$seriee = "";
						/* echo "<pre>";
						print_r($listeserie);
						echo "</pre>"; */

						
						foreach($listeserie as $serie){
							$seriee .= " 
							
							<option value=\"".$laclasse." ". $serie->serie ." \">".$laclasse." ". $serie->serie ."</option>";

						};
						
						?>
					<select style="font-size:20px" name="classe" class="form-control" id="">
						<?= $seriee ?>
					</select>
				</div>
				
				
				

				

			</div>
				<br>
			<div class="row ">
				
				<div class="col-lg-6 mt-4">
					<label for="apte" style="font-size:20px; font-weight:bold;color:black "><b>Apte pour sport ?</b></label><br>
					<select name="apte" style="font-size:20px" class="form-control" id="">
					<?php function apte($ap, $val){
							$chaine = "";
							if($ap == $val){
								$chaine .= "selected";
							}
							return $chaine;
					} ?>
						<option value="Non" <?= apte("Non",$apte) ?>>Non</option>
						<option value="Oui" <?= apte("Oui",$apte) ?>>Oui</option>
					</select>
				</div>
					
				<div class="col-lg-6 mt-4">
						<label for="personne_a_contacter" style="font-size:20px; font-weight:bold;color:black "><b>Personne à Contacter:</b> </label>
						<input style="font-size:20px" type="tel" value="<?= $personne_contacter ?>"  id="personne_a_contacter"   placeholder="Personne à Contacter" name="personne_a_contacter" required class="form-control hh">

				</div>
				

					
			</div>
				<br>
			<div class="row">
				

				<div class="col-lg-6 mt-4">
						<label for="adresse" style="font-size:20px; font-weight:bold;color:black "><b>Adresse Elève:</b> </label>
						<input style="font-size:20px;" value="<?= $adresse_eleve ?>"  type="text" id="adresse"  placeholder="Adresse" name="adresse" required class="form-control ii">

				</div>
				<div class="col-lg-6 mt-4">
						<label for="adresse" style="font-size:20px; font-weight:bold;color:black "><b>Ecole de provenance:</b> </label>
						<input style="font-size:20px;" value="<?= $ecole_provenance ?>"  type="text" id="adresse"  placeholder="Votre école de provenance" name="ecole_provenance" required class="form-control ii">

				</div>
			</div>


			


			<br> 
			<div class="row ">
				<center>

					<div class="col-lg-12">
						<button href="" type="submit" id="valider" name="submit_valider"  class="btn btn-warning">
							<h5> <b style="font-size:20px"> Valider votre réinscription </b></h5>
						</button>
					</div>

				</center>
				
			</div>

		</fieldset>



	</form> <br>

<?php


}



?>
	
	


	

	<script language="JavaScript">
		/* nom_user = document.form1.nom.value;
		document.write(nom_user);
		document.form1.submit_valider.addEventListener("click", function ok() {
			alert(nom_user);
		}); */

		
	</script>

	<script src="app.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>


@endsection()