<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutas', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('clientes');
            $table->foreign('clientes')->references('id')->on('clientes');
            $table->string('nombre', 20);
            $table->string('cliente', 20);
            $table->string('lugar_exp', 50);
            $table->string('origen', 50);
            $table->string('remitente', 50);
            $table->string('dom_remitente', 50);
            $table->string('recoge', 50);
            $table->string('valor_declarado', 50);
            $table->string('destino', 50);
            $table->string('destinatario', 50);
            $table->string('dom_destinatario', 50);
            $table->string('entrega', 50);
            $table->string('fecha_entrega', 50);
            $table->string('cantidad', 50);
            $table->string('embalaje', 50);
            $table->string('concepto', 50);
            $table->string('material_peligroso', 50);
            $table->string('indemnizacion', 50);
            $table->string('obs', 50);
            $table->integer('dias_re');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rutas');
    }
}
