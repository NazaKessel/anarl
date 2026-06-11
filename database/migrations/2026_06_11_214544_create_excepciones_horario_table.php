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
    Schema::create('excepciones_horario', function (Blueprint $table) {
        $table->id();

        $table->foreignId('medico_id')
              ->constrained('medicos')
              ->cascadeOnDelete();

        $table->date('fecha');

        $table->time('hora_inicio');
        $table->time('hora_fin');

        $table->enum('tipo', [
            'BLOQUEO',
            'DISPONIBILIDAD_EXTRA'
        ]);

        $table->string('motivo')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('excepciones_horario');
    }
};
