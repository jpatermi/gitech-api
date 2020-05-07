<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id()->comment('Id del registro');
            $table->foreignId('business_area_id')->constrained()->comment('Id del Area de Negocio');
            $table->enum('type', ['A', 'S'])->comment('Tipo de Compañía: Autónomo o Sociedad');
            $table->string('social_reason')->comment('Nombre de la Sociedad');
            $table->string('tradename')->comment('Nombre Comercial');
            $table->string('nif')->comment('Número de Identificación Fiscal');
            $table->foreignId('user_id')->nullable()->comment('Id del Usuario para bitacora');
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
        Schema::dropIfExists('companies');
    }
}
