<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersITMSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('users_i_t_m_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreUsuario');
            $table->string('correo');
            $table->string('contrasena');
            $table->string('tipoUsuario');
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
        Schema::dropIfExists('users_i_t_m_s');
    }
}
