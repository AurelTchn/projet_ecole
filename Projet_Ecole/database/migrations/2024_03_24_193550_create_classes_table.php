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
        Schema::create('classes', function (Blueprint $table) {
            $table->text('annee',20);
            $table->text('code_classe',32);
            $table->text('serie',10);
            $table->text('groupe',20);
            $table->text('nom_classe',40);
            $table->text('cycle',30);
            $table->text('numordre',10);
            $table->text('examen',10);
            $table->text('max_eff',20);
            $table->text('scolarite',500);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
