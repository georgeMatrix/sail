<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operadores', function (Blueprint $table) {
           $table->Increments('id');
            $table->string('apellido_paterno', 20);
            $table->string('apellido_materno', 20);
            $table->string('nombres', 50);
            $table->string('nombre_corto', 20);
            $table->string('licencia', 20);
            $table->date('vigencia_licencia');
            $table->date('vigencia_medico');
            $table->string('obs', 100);
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
        Schema::dropIfExists('operadores');
    }
}
