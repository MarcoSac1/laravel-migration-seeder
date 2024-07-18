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
        Schema::create('train', function (Blueprint $table) {
            $table->id();
            $table->string('azienda',30);
            $table->string('stazione_di_partenza',50);
            $table->dateTime('data_di_partenza');
            $table->time('orario_di_arrivo');
            $table->decimal('codice_treno');
            $table->decimal('numero_carrozze');
            $table->string('in_orario');
            $table->string('cancellato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('train');
    }
};