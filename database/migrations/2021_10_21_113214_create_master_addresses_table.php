<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_addresses', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id');
            $table->string('label');
            $table->string('recipient_name');
            $table->string('phone');
            $table->foreignId('province_id');
            $table->foreignId('regency_id');
            $table->foreignId('district_id');
            $table->foreignId('village_id');
            $table->integer('zip_code');
            $table->boolean('status');
            
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
        Schema::dropIfExists('master_addresses');
    }
}
