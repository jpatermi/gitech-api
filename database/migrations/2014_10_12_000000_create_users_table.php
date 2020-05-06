<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->comment('Id del registro');
            $table->foreignId('company_id')->constrained()->comment('Id de la Compañía');
            $table->string('name', 100)->comment('Nombre del Usuario');
            $table->string('last_name', 100)->comment('Apellido del Usuario');
            $table->string('email')->unique()->comment('Email que servira de username para el login');
            $table->timestamp('email_verified_at')->nullable()->comment('Indica si el email fue verificado');
            $table->string('password')->comment('Clave para el login');
            $table->string('api_token', 60)->comment('Token de Autenticación para el API');
            $table->rememberToken()->comment('Indica si se recuerda el login');
            $table->string('dni', 12)->comment('Documento Nacional de Identidad');
            $table->foreignId('status_id')->default(1)->comment('Estado del registro');
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
        Schema::dropIfExists('users');
    }
}
