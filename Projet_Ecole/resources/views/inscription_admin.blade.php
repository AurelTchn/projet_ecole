<?php require "connect.php" ?>

<?php

/* function titre($nmm){
	echo "$nmm";
}  */?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css"> -->
	<?php include "header.php" ?>

	<script language="Javascript">
		
        /* window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0); 
        }) */
    
		/* function veriification(a) {
			var chaine = "";
			if(a != null){
				chaine = "is-valid"
				return chaine;
			}else{
				return chaine;
			}
		}
		 */
		function veri1(a){
			
			/* document.write(a); */
			ull = document.querySelector(".aa");
			if(a !== ""){
				
				ull.classList.remove("is-invalid"); 
				ull.classList.add("is-valid");
			}else{
				ull.classList.add("is-invalid");
				/* ul.classList.remove("is-valid"); */
				
			}
			
		};
		function veri2(b){
			/* document.write(b); */
			ul = document.querySelector(".bb");
			if(b !== ""){
				
				ul.classList.remove("is-invalid"); 
				ul.classList.add("is-valid");
			}else{
				ul.classList.add("is-invalid");
				/* ul.classList.remove("is-valid"); */
				
			}
			
		};
		function veri3(c){
			/* document.write(b); */
			ul = document.querySelector(".cc");
			if(c !== ""){
				
				ul.classList.remove("is-invalid"); 
				ul.classList.add("is-valid");
			}else{
				ul.classList.add("is-invalid");
				/* ul.classList.remove("is-valid"); */
				
			}
			
		};
		function veri4(d){
			/* document.write(b); */
			ul = document.querySelector(".dd");
			if(d !== ""){
				
				ul.classList.remove("is-invalid"); 
				ul.classList.add("is-valid");
			}else{
				ul.classList.add("is-invalid");
				/* ul.classList.remove("is-valid"); */
				
			}
			
		};
		function veri5(e){
			/* document.write(b); */
			ul = document.querySelector(".ee");
			if(e !== ""){
				
				ul.classList.remove("is-invalid"); 
				ul.classList.add("is-valid");
			}else{
				ul.classList.add("is-invalid");
				/* ul.classList.remove("is-valid"); */
				
			}
		};
		function veri6(f){
			/* document.write(b); */
			ul = document.querySelector(".ff");
			if(f !== ""){
				
				ul.classList.remove("is-invalid"); 
				ul.classList.add("is-valid");
			}else{
				ul.classList.add("is-invalid");
				/* ul.classList.remove("is-valid"); */
				
			}
			
		};
		function veri7(g){
			/* document.write(b); */
			ul = document.querySelector(".gg");
			if(g !== ""){
				
				ul.classList.remove("is-invalid"); 
				ul.classList.add("is-valid");
			}else{
				ul.classList.add("is-invalid");
				/* ul.classList.remove("is-valid"); */
				
			}
			
		};
		function veri8(h){
			/* document.write(b); */
			ul = document.querySelector(".hh");
			if(h !== ""){
				ul.classList.remove("is-invalid"); 
				ul.classList.add("is-valid");
			}else{
				ul.classList.add("is-invalid");
				/* ul.classList.remove("is-valid"); */
				
			}
			
		};
		function veri9(i){
			/* document.write(b); */
			ul = document.querySelector(".ii");
			if(i !== ""){
				
				ul.classList.remove("is-invalid"); 
				ul.classList.add("is-valid");
			}else{
				ul.classList.add("is-invalid");
				/* ul.classList.remove("is-valid"); */
				
			}
			
		};
		function veri10(j){
			/* document.write(b); */
			ul = document.querySelector(".jj");
			if(j !== ""){
				
				ul.classList.remove("is-invalid"); 
				ul.classList.add("is-valid");
			}else{
				ul.classList.add("is-invalid");
				/* ul.classList.remove("is-valid"); */
				
			}
			
		}
		
		

	</script>


</head>





<body>

	<style>
		body * {
			font-family: "Times New Roman";
			
		}
	</style>
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
		*{
			font-family:"Times News Roman";
		}

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
            <li><a href="scolarite.php" >Scolarité</a></li>
			<li><a href="reinscription.php" class="btn btn-primary"><b>Réinscription</b></a></li>
    
        </ul>
        <section class="banner"></section>
    </header> -->
	
	
    

		<br><br><br><div></div> <br><br> <br>
	


	<div>
			<a href="reinscription.php"><button type="submit" id="valider" name="submit_valider"  class="btn btn-primary pull-right">
				<h4> <b> Réinscription</b></h4>				
			</button></a>
	</div><br><br><br>
	<div class="alert alert-warning">
		<center>
			<h1> <b style="font-size:35px ">Bienvenue sur la page d'incription de votre enfant en tant qu'un membre d'administration !</b> </h1>
		</center>
	</div>
	<center style="font-size:20px ">
		Pour ce fait, vous devez entrer des informations justes afin de valider l'inscription de votre enfant.
	</center> <br>

	<form action="traitement.php" name="form1" method="POST" class="container" enctype="multipart/form-data">
		<fieldset width="75%" name="fieldset" class="scheduler-border">
			<legend class="scheduler-border"><b><u style="color:blue; font-size:25px">Informations Parents:</u></b></legend>

			<div class="row">
				<div class="col-lg-4">
					<label for="nom" style="font-size:20px; font-weight:bold;color:black "> <b> Nom du Parent: </b></label>
					<input style="font-size:20px;font-family:'serif';"
					 type="text" id="nom" onblur="veri1(document.form1.nom.value);" placeholder="Nom" name="nom" required class="form-control is-valid aa">

				</div>
				<div class="col-lg-4">
					<label for="prenom" style="font-size:20px; font-weight:bold;color:black "><b>Prénom du Parent:</b> </label>
					<input style="font-size:20px;" type="text" id="prenom" onblur="veri2(document.form1.prenom.value);"  placeholder="prenom" name="prenom" required class="form-control bb">

				</div>
				<div class="col-lg-4">
					<label for="profession" style="font-size:20px; font-weight:bold;color:black "><b>Profession du Parent:</b> </label>
					<input style="font-size:20px;" type="text" id="profession" onblur="veri3(document.form1.profession.value);"  name="profession" placeholder="Votre profession" required class="form-control cc">

				</div>
			</div>

			<br>
			<div class="row">
				<div class="col-lg-4 ">
					<label for="contact" style="font-size:20px; font-weight:bold;color:black "><b>Contact:</b></label>
					<input style="font-size:20px" type="number" min="0" name="contact" id="contact" onblur="veri4(document.form1.contact.value);"  required placeholder="Contact" class="form-control dd">
				</div>

				<div class="col-lg-4">
					<label for="email" style="font-size:20px; font-weight:bold;color:black "><b>E-mail:</b> </label>
					<input style="font-size:20px" type="email" name="email" id="email" onblur="veri5(document.form1.email.value);"  placeholder="Votre E-mail" class="form-control ee" required>
				</div>
				<div class="col-lg-4">
					<label for="statut" style="font-size:20px; font-weight:bold;color:black "><b>Titre:</b></label>
					<?php 

						function voirtitre($b,$c){
							if($b == $c){
								return "selected";
							}else{
								return "";
							}
						}
					
					?>

					<select name="statut" style="font-size:20px" id="statut" class="form-control"> 
						<option value="Enseignant" <?= voirtitre($tit,"Enseignant") ?>>Enseignant</option>
						<option value="Censeur" <?= voirtitre($tit,"Censeur") ?>>Censeur</option>
						<option value="Directeur"<?= voirtitre($tit,"Directeur") ?>>Directeur</option>
						<option value="Sécrétaire"<?= voirtitre($tit,"Sécrétaire") ?>>Sécrétaire</option>
					</select>
				</div>



			</div>

			<br> <br>

			<legend class="scheduler-border"><b><u style="color:blue; font-size:25px">Informations Élève:</u></b></legend>

			<div class="row">
				<div class="col-lg-6">
					<label for="nom" style="font-size:20px; font-weight:bold;color:black "> <b> Nom: </b></label>
					<input style="font-size:20px;" type="text" id="nom_eleve" placeholder="nom" onblur="veri6(document.form1.nom_eleve.value)" name="nom_eleve" required class="form-control ff">

				</div>
				<div class="col-lg-6">
					<label for="prenom" style="font-size:20px; font-weight:bold;color:black "><b>Prénom:</b> </label>
					<input style="font-size:20px;" type="text" id="prenom_eleve" placeholder="Entrer votre prenom" onblur="veri7(document.form1.prenom_eleve.value)" name="prenom_eleve" required class="form-control gg">

				</div>
				
			</div>
			<div class="row">
				<div class="col-lg-6">
					<label for="date_de_naissance" style="font-size:20px; font-weight:bold;color:black "><b>Date de naissance:</b> </label>
					<input style="font-size:20px;" type="date" id="date_de_naissance" name="date_de_naissance" required class="form-control">

				</div>
				<div class="col-lg-6 ">
					<label for="sexe"style="font-size:20px; font-weight:bold;color:black "><b>Genre:</b></label>
					<select name="sexe" style="font-size:20px;font-weight:bold" id="sexe" class="form-control">
						<option value="Masculin" selected>Masculin</option>
						<option value="Feminin">Féminin</option>
					</select>
				</div>
				
			</div>

			<br> 
			<div class="row">
				
				
				
				<div class="col-lg-6">
					<label for="classe"style="font-size:20px; font-weight:bold;color:black " ><b>Classe:</b></label>
					<select name="classe" style="font-size:20px" id="classe" class="form-control">
						<option value="Maternelle NA" selected>Maternelle</option>
						<option value="CI NA">CI</option>
						<option value="CP NA">CP</option>
						<option value="CE1 NA">CE1</option>
						<option value="CE2 NA">CE2</option>
						<option value="CM1 NA">CM1</option>
						<option value="CM2 NA">CM2</option>
						<option value="6eme NA">6ème</option>
						<option value="5eme NA">5ème</option>
						<option value="4eme ML">4ème ML</option>
						<option value="4eme MC">4ème MC</option>
						<option value="3eme ML">3ème ML</option>
						<option value="3eme MC">3ème MC</option>
						<option value="2dne AB">2dne AB</option>
						<option value="2dne CD">2dne CD</option> 
						<option value="1ere A">1ère A</option>
						<option value="1ere B">1ère B</option>
						<option value="1ere C">1ère C</option>
						<option value="1ere D">1ère D</option>
						<option value="Tle A">Tle A</option>
						<option value="Tle B">Tle B</option>
						<option value="Tle C">Tle C</option>
						<option value="Tle D">Tle D</option>
					</select>
				</div>

				<div class="col-lg-6">
					<label for="apte" style="font-size:20px; font-weight:bold;color:black "><b>Apte pour sport ?</b></label><br>
					<select name="apte" style="font-size:20px" class="form-control" id="">
						<option value="Oui">Oui</option>
						<option value="Non">Non</option>
					</select>
				</div>

			</div>
				<br>
			<div class="row ">
					<div class="col-lg-6">
						<label for="personne_a_contacter" style="font-size:20px; font-weight:bold;color:black "><b>Personne à Contacter:</b> </label>
						<input style="font-size:20px" type="tel" id="personne_a_contacter" onblur="veri8(document.form1.personne_a_contacter.value)"  placeholder="Personne à Contacter" name="personne_a_contacter" required class="form-control hh">

					</div>
				

					<div class="col-lg-6">
						<label for="adresse" style="font-size:20px; font-weight:bold;color:black "><b>Adresse Elève:</b> </label>
						<input style="font-size:20px;" type="text" id="adresse" onblur="veri9(document.form1.adresse.value)" placeholder="Adresse" name="adresse" required class="form-control ii">

					</div>
					
			</div>

				<br>
			<div class="row">
					<div class="col-lg-6">
						<label for="ecole_provenance" style="font-size:20px; font-weight:bold;color:black "><b>Ecole de Provenance:</b> </label>
						<input style="font-size:20px;" type="text" id="ecole_provenance" placeholder="Ecole de provenance" name="ecole_provenance" class="form-control jj ">

					</div>
					<div class="col-lg-6">
						<label for="montant" style="font-size:20px; font-weight:bold;color:black "><b>Montant à payer :</b> </label>
						<input style="font-size:20px;font-weight:bold" readonly value="18000" type="text" id="montant" name="ecole_provenance" class="form-control jj ">

					</div>
			</div>

			

			
			
			<br> 
			<div class="row ">
				
				<div class="col-lg-8 ">
                
                    <button type="reset" name="submit_effacer" class="btn btn-danger">
                        <h5> <b style="font-size:20px" > Effacer toutes les données entrées</b></h5>
                    </button>
                    
				</div>
				<div class="col-lg-4 ">
					<button type="submit" id="valider" name="submit_valider"  class="btn btn-success">
						<h5> <b style="font-size:20px" > Valider votre inscription ici</b></h5>
					</button>
				</div>
			</div>

		</fieldset>



	</form> <br>




	
	<?php 
	include "footer.php";
	?>


	

	<script language="JavaScript">
		/* nom_user = document.form1.nom.value;
		document.write(nom_user);
		document.form1.submit_valider.addEventListener("click", function ok() {
			alert(nom_user);
		}); */


		
		if(document.form1.statut.value=="Enseignant" ||
		   document.form1.statut.value=="Censeur" ||
		   document.form1.statut.value=="Sécrétaire"){

			document.getElementById('montant').value = 50000;
		}else{
			document.form1.montant.value = 0;
		}

	</script>

	<script src="app.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>