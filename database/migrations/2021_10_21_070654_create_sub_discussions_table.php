<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubDiscussionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_discussions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('discussion_id'); 
            $table->foreignId('product_id'); 
            $table->foreignId('user_id'); 
            $table->string('note'); 
            
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
        Schema::dropIfExists('sub_discussions');
    }
}
