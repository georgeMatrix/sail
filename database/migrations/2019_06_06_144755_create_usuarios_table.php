<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('nombre');
            $table->string('password');
            $table->string('nombreCorto');
            $table->string('cargo');
            $table->string('area');
            $table->boolean('modulo01');
            $table->boolean('modulo02');
            $table->boolean('modulo03');
            $table->boolean('modulo04');
            $table->boolean('modulo05');
            $table->boolean('modulo06');
            $table->boolean('modulo07');
            $table->boolean('modulo08');
            $table->boolean('modulo09');
            $table->boolean('modulo10');
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
        Schema::dropIfExists('usuarios');
    }
}
