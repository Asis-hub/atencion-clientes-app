<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('solicituds', function (Blueprint $table) {
        $table->id();
        $table->string('solicitud_atencion');
        $table->string('observaciones');
        $table->unsignedBigInteger('cliente_id'); // Llave foránea para clientes
        $table->timestamps();

        // LLave foránea
        $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
};
