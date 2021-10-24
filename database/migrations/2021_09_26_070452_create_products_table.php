<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->integer('price');
            $table->integer('quantity');
            $table->text('description');
            $table->text('weight');
            $table->string('slug');
            $table->enum('condition', ['Baru','Bekas']);
            // $table->enum('variant', ['Warna','Ukuran']);
            $table->boolean('status');
            $table->foreignId('user_id');
            $table->foreignId('category_id');
            
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
}
