<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('propositions', function (Blueprint $table) {
            $table->id();
            $table->string('type_structure');
            $table->string('nom_structure');
            $table->string('nom_contact');
            $table->string('email');
            $table->string('type_soutien');
            $table->text('description');
            $table->enum('statut', ['en_attente', 'etudie', 'accepte', 'refuse'])->default('en_attente');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('propositions');
    }
};
