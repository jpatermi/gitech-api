<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained()->commet('Id de la Compañía');
            $table->foreignId('bank_id')->constrained()->commet('Id del Banco');
            $table->string('bank_account')->comment('Cuenta Bancaria');
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
        Schema::dropIfExists('bank_companies');
    }
}
