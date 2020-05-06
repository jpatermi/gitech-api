<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained()->commet('Id de la Compañía');
            $table->foreignId('service_id')->constrained()->commet('Id del Banco');
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
        Schema::dropIfExists('company_services');
    }
}
