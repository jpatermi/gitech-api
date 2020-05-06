<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_areas', function (Blueprint $table) {
            $table->id()->comment('Id del registro');
            $table->foreignId('area_group_id')->constrained()->comment('Id del Grupo de Areas');
            $table->string('area_code', 4)->comment('Código del Área de Negocio');
            $table->string('description')->comment('Descripción del Área de Negocio');
            $table->foreignId('user_id')->nullable()->comment('Id del Usuario para bitacora');
            $table->foreignId('status_id')->default(1)->comment('Estado del registro');
            $table->timestamps();

            $table->unique(['area_code']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_areas');
    }
}
