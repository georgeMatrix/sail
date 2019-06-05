<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('provedor');
            $table->foreign('provedor')->references('id')->on('provedores');
            $table->string('nombre', 70);
            $table->string('economico', 10);
            $table->string('tipo', 20);
            $table->string('marca', 20);
            $table->string('modelo', 20);
            $table->string('placas', 20);
            $table->string('serie', 20);
            $table->string('motor', 20);
            $table->date('seguro');
            $table->date('verificacion');
            $table->date('fm');
            $table->string('obs',100);
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
        Schema::dropIfExists('unidades');
    }
}
