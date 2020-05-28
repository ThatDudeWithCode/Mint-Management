<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('company_name');
            $table->string('client_number');
            $table->string('client_number_office');
            $table->string('client_email');
            $table->string('client_address');
            $table->string('client_address_2');
            $table->string('client_city');
            $table->string('client_provence');
            $table->string('client_zip');
            $table->string('client_country');
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
        Schema::dropIfExists('clients');
    }
}
