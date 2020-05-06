<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_clients', function (Blueprint $table) {
            $table->id()->comment('Id del registro');
            $table->foreignId('company_provider_id')->comment('Id de la Empresa que es Proveedor');
            $table->foreignId('company_client_id')->comment('Id de la Empresa que es Cliente');
            $table->foreignId('user_id')->nullable()->constrained()->comment('Id del Usuario para bitacora');
            $table->foreignId('status_id')->default(1)->comment('Estado del registro');
            $table->timestamps();

            $table->unique(['company_provider_id', 'company_client_id']);

            $table->foreign('company_provider_id')->references('id')->on('users');
            $table->foreign('company_client_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provider_clients');
    }
}
