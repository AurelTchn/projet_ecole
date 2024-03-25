@extends("template")


@section("contenu")



	<!-- 
		<a href="./index.php">
			<button type="submit" name="submit_effacer" class="btn btn-primary">
				<h5> <b>Retourner à la page d'accueil</b></h5>
			</button>
		</a>
	
	<hr> -->

	<!-- <header>
        <a href="#" class="logo">MyEcole</a>
        <ul>
            <li><a href="index.php" >Accueil</a></li>
            <li><a href="scolarité" >Scolarité</a></li>
			<li><a href="reinscription.php" class="btn btn-primary"><b>Réinscription</b></a></li>
    
        </ul>
        <section class="banner"></section>
    </header> -->

    

	<hr>
        
    <br><br><br><br><br>
        
    <form action="recherche" method="POST" class="alert alert-info">    
        @method('POST')
        @csrf
        <fieldset>
            @if ($errors)
                @error('matuser')
                    <ul>
                        <li style="color:red;font-size:20px">Entrer le matricule de l'élève</li>
                    </ul>
                @enderror

            @endif
            <center>
            <div class="row container">    
                <button class="alert alert-info" style="font-size:20px;">
                    <b>Matricule de l'élève</b>  
                </button> 
            </div> <br>

            <div class="row container">
                <input style="padding:20px; font-size:20px;font-weight:bold" name="matuser"  type="number" min="0" class="form-control" 
                placeholder="Matricule de l'élève" >

            </div>

                <br>
            
            
            <div class="row container">
                <button type="submit" style="font-size:20px;" class="btn btn-primary"><b>Rechercher</b></button>
            </div>
            </center>

        </fieldset>

    </form>
    
        


        <script language="JavaScript">
		/* nom_user = document.form1.nom.value;
		document.write(nom_user);
		document.form1.submit_valider.addEventListener("click", function ok() {
			alert(nom_user);
		}); */
	</script>

        <br><br><br><br>
    <!-- <footer>
		<div class="container-fluid bg-dark">
			<div class="row">
				<div class="col-md-12 text-capitalize texttext-light">
					<center>DESIGNED BY Ecole Pro . DATE 10/02/2024 - WEBSEOTIPS.COM</center>
				</div>
			</div>
		</div>
	</footer> -->

    
    
	<script src="app.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

        


</html>




@endsection