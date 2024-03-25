@php 
	

	/* $requete = $connexion->prepare('SELECT MAX(mat_eleve) FROM eleve;');
	$requete->execute(); */ 

	/* $rq = DB::select("SELECT MAX(mat_eleve) as M FROM eleves;");  */
	
	
	
@endphp


@extends("template")


@section("contenu")


@endphp

<?php
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo "<pre>";

echo "</pre>";





/* $valeur = mail('aureltchanhouin@gmail.com','Salutation','Texte');
echo "<br><br><br><br>";
echo "OUI";
echo "$valeur"; */

?>


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
	</center> -->
	

   


        <?php
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

	// $requete = $connexion->prepare('SELECT MAX(mat_eleve) FROM eleve;');
	// $requete->execute();
	// $resultat = $requete->fetchall();

	// $mat_elevee = $resultat[0][0] + 1;
	//************************************************************************************** */

	/* echo "<pre>";
	print_r($mat_elevee);
	echo "</pre>"; */

    /* $mat_elevee =  str_pad($mat_elevee,8,"0",STR_PAD_LEFT); */


	
	/* echo "<pre>";
	echo $mat_elevee;
	echo "</pre>"; */
    

	
	$groupee = 'A';
	

    /* $slq_code = $connexion->prepare("INSERT INTO eleve(annee,mat_eleve,nom,prenom,sexe,
	code_classe,serie,groupe,
	num_parent,email_parent,nom_parent,profession_parent,statut_parent,
	date_de_naissance,
	adresse_eleve,ecole_de_provenance,prenom_parent,apte_sport,personne_contacter) VALUES(:annee,:mat_eleve,:nom,:prenom,
	:sexe,:code_classe,:serie,:groupe,:num_parent,:email_parent,:nom_parent,
	:profession_parent,
	:statut_parent,:date_de_naissance,:adresse_eleve,:ecole_de_provenance,:prenom_parent,:apte_sport,:personne_contacter)");
    
    $slq_code->bindParam(':annee',$an);
    $slq_code->bindParam(':mat_eleve',$mat_elevee);
    $slq_code->bindParam(':nom',$nom_eleve);
    $slq_code->bindParam(':prenom',$prenom_eleve);
	$slq_code->bindParam(':sexe',$sexe);
	$slq_code->bindParam(':code_classe',$code_classe_tab[0]);
	$slq_code->bindParam(':serie',$code_classe_tab[1]);
	$slq_code->bindParam(':groupe',$groupee);
	$slq_code->bindParam(':num_parent',$contact);
	$slq_code->bindParam(':email_parent',$email);
	$slq_code->bindParam(':nom_parent',$nom);
	$slq_code->bindParam(':profession_parent',$profession);
	$slq_code->bindParam(':statut_parent',$statut);
	$slq_code->bindParam(':date_de_naissance',$date_naissance);
	$slq_code->bindParam(':adresse_eleve',$adresse_eleve);
	$slq_code->bindParam(':ecole_de_provenance',$ecole_provenance);
	$slq_code->bindParam(':prenom_parent',$prenom);
	$slq_code->bindParam(':apte_sport',$apt);
	$slq_code->bindParam(':personne_contacter',$personne_contacter);
	

    $slq_code->execute();  */ ?>

	<hr>
    <br>

    <div class="alert alert-success">
        <center><h2><b>Enrégistrement réussi !!</b></h2></center>
    </div>

    
    <p style="font-size:20px" class="">Cher <b><?=$statut ?></b>: <b> <?= $nom." " ?> <?=$prenom ?></b>, vous venez d'inscrire l'enfant <b> <?= $nom_eleve." ".$prenom_eleve ?> </b>
 dans notre école dans la classe de <b><?= $classe ?></b> pour l'annee <b> <?= $an ?> .</b></p>


	<br><br><br>
	
	





</body>
</html>


@endsection  
