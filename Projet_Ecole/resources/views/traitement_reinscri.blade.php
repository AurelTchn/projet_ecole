@php
	use Illuminate\Support\Facades\DB;
	
@endphp

@extends("template")

@section("contenu")


<body>


    <style>
		body * {
			font-family: "Times New Roman";
			
		}
	</style>

	
    
	
    


<?php

    
		/* ------------------------------------- */
		/* recup infos parents*/
		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$profession = $_POST["profession"];
		$contact = $_POST["contact"];
		$email = $_POST["email"];
		$statut = $_POST["statut"];



		/*recup infos élève */
		$nom_eleve = $_POST["nom_eleve"];
		$prenom_eleve = $_POST["prenom_eleve"];
		$date_naissance = $_POST["date_de_naissance"];
		/*comment recup photo ? */
		$sexe = $_POST["sexe"];
		$classe = $_POST["classe"];
		$personne_contacter = $_POST["personne_a_contacter"];
		$adresse_eleve = $_POST["adresse"];
		$ecole_provenance = $_POST["ecole_provenance"];
		$apt = $_POST['apte'];
		/* var_dump($classe);
		echo "<br>"; */
		$code_classe_tab = explode(" ",$classe);
		/* var_dump($code_classe_tab[1]); */

		$an = date('Y');

		$mat_elev = $_POST['matricule'];

		$groupee = 'A';
		

		try {
			DB::table('eleves')->insert([
			'annee' => $an,
			'mat_eleve' => $mat_elev,
			'nom' => $nom,
			'prenom' => $prenom,
			'sexe' => $sexe,
			'date_de_naissance' => $date_naissance,
			'adresse_eleve' => $adresse_eleve,
			'code_classe' => $code_classe_tab[0],
			'serie' => $code_classe_tab[1],
			'groupe' => 'A',
			'ecole_de_provenance' => $ecole_provenance,
			'apte_sport' => $apt,
			'personne_contacter' => $personne_contacter,
			'nom_parent' => $nom,
			'prenom_parent' => $prenom,
			'num_parent' => $contact,
			'email_parent' => $email,
			'profession_parent' => $profession,
			'statut_parent' => $statut,
			]);
			
			?>
			<br><br><br><br>
			<div class="alert alert-success">
        <center><h2><b>Enrégistrement réussi !!</b></h2></center>
    </div>





<p style="font-size:20px;" class="">Cher <b><?=$statut ?></b>: <b> <?= $nom." " ?> <?=$prenom ?></b>, vous venez de <b>réinscrire</b> l'enfant <b> <?= $nom_eleve." ".$prenom_eleve ?> </b>
 dans notre école dans la classe de <b><?= $classe ?></b> pour l'annee <b> <?= $an ?> .</b></p><?php
		}catch(Exception $e){
			?><br><br><br><br><div class="alert alert-danger">
				<h1><center><b>Echec d'enrégistrement</b></center></h1>
			</div>
			<div class="alert alert-info">
				<h3><center><b>Vous ne pouvez pas réinscrit un élève qui est déjà inscrit dans une même année.</b></center></h3>
				<p><b><center>Attendez l'année prochaine pour pouvoir réinscrire votre enfant !</center></b></p>
			</div><?php
		}
		
?>



	<br>


@endsection
    
    