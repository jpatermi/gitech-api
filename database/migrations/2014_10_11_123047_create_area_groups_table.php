<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_groups', function (Blueprint $table) {
            $table->id()->comment('Id del registro');
            $table->string('name')->comment('Nombre del Grupo de Área');
            $table->string('description')->comment('Descripción del Grupo de Area');
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
        Schema::dropIfExists('area_groups');
    }
}
