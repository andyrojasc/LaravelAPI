<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaContactos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('tabla_contactos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreContacto');
            $table->string('numeroTelefono');
            $table->string('area');
            $table->string('actividad');
            $table->string('empresa');
            $table->string('descripcion');
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
        Schema::dropIfExists('tabla_contactos');
    }
}
