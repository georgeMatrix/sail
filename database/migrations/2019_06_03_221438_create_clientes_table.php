<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre', 70);
            $table->string('calle', 70);
            $table->string('numero', 10);
            $table->string('interior', 10);
            $table->string('colonia', 70);
            $table->string('ciudad', 70);
            $table->string('cp', 10);
            $table->string('estado', 20);
            $table->string('contacto1', 50);
            $table->string('tel1', 20);
            $table->string('mail1', 50);
            $table->string('contacto2', 50);
            $table->string('tel2', 20);
            $table->string('mail2', 50);
            $table->string('dia_revision', 20);
            $table->integer('dia_credito');
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
        Schema::dropIfExists('clientes');
    }
}
