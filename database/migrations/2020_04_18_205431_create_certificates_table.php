<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id()->comment('Id del registro');
            $table->foreignId('company_id')->constrained()->comment('Id de la Compañía');
            $table->string('number')->comment('Número del Ceritficado');
            $table->string('description')->comment('Descripción del Certidicado');
            $table->string('activation_date')->comment('Fecha de Activiación');
            $table->string('deactivation_date')->comment('Fecha de Desactiviación');
            $table->string('type')->comment('Tipo de documento');
            $table->string('social_security')->comment('Número de Seguridad Social');
            $table->foreignId('user_id')->nullable()->constrained()->comment('Id del Usuario para bitacora');
            $table->foreignId('status')->default(1)->comment('Estado del Certificado 1-Activo 0-Inactivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificates');
    }
}
