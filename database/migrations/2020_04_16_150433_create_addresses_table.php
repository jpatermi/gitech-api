<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id()->comment('Id del registro');
            $table->foreignId('city_id')->constrained()->comment('Id de la Ciudad');
            $table->foreignId('company_id')->constrained()->comment('Id de la Compañía');
            $table->string('description')->comment('Desripción de la dirección');
            $table->string('number', 10)->comment('Numero de Bloque');
            $table->string('portal', 10)->comment('Portal de Apartamentoto');
            $table->string('floor', 10)->comment('Piso de Apartamento');
            $table->string('zip', 10)->comment('Codigo Postal');
            $table->foreignId('user_id')->nullable()->constrained()->comment('Id del Usuario para bitacora');
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
        Schema::dropIfExists('addresses');
    }
}
