<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('eleves', function (Blueprint $table) {
            
            $table->string('annee');
            $table->string('mat_eleve');
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('date_de_naissance');
            $table->string('adresse_eleve');
            $table->string('code_classe');
            $table->string('serie');
            $table->string('groupe');
            $table->string('ecole_de_provenance');
            $table->string('apte_sport');
            $table->string('personne_contacter');
            $table->string('nom_parent');
            $table->string('prenom_parent');
            $table->string('num_parent');
            $table->string('email_parent');
            $table->string('profession_parent');
            $table->string('statut_parent');
    
            $table->timestamps();
            $table->primary(['annee', 'mat_eleve']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eleve');
    }
};
