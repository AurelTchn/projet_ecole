<?php


namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\EleveRequest;
use App\Http\Requests\SearchRequest;
use App\Models\Eleve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
   public function envoie(Eleve $eleve, EleveRequest $request){

      $an = date('Y');
      
      $max_value = DB::select("SELECT MAX(mat_eleve) as M FROM eleves;"); 
   
      
      $new_mat = $max_value[0]->M + 1;

      $new_mat = str_pad($new_mat,8,"0",STR_PAD_LEFT);

      $classe = $request->classe;
      $code_classe_tab = explode(" ",$classe);

      Eleve::create([
         'annee' => $an,
         'mat_eleve' => $new_mat,
         'nom' => $request->nom,
         'prenom' => $request->prenom,
         'sexe' => $request->sexe,
         'date_de_naissance' => $request->date_de_naissance,
         'adresse_eleve' => $request->adresse,
         'code_classe' => $code_classe_tab[0],
         'serie' => $code_classe_tab[1],
         'groupe' => 'A',
         'ecole_de_provenance' => $request->ecole_provenance,
         'apte_sport' => $request->apte,
         'personne_contacter' => $request->personne_a_contacter,
         'nom_parent' => $request->nom,
         'prenom_parent' => $request->prenom,
         'num_parent' => $request->contact,
         'email_parent' => $request->email,
         'profession_parent' => $request->profession,
         'statut_parent' => $request->statut,


      ]);
      

      return view('traitement');
   }


   public function search(Eleve $eleve, SearchRequest $request){
      $mat_user = $request->matuser;

      $rq = DB::select("SELECT * FROM eleves WHERE mat_eleve='$mat_user'");

      return view('recherche');
   }

   public function search_admin(){
      return view('admin');
   }


   
}
