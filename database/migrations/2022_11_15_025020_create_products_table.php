<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('slug');//
            $table->double('price');
            $table->longText('description');//
            $table->integer('quantity');
            $table->integer('status')->default(0);//
            // $table->unsignedInteger('category_id');//
            $table->foreignId('category_id')->constrained('categories');
            $table->timestamps();
            // $table->foreign('category_id')->references('id')->on('categories');//
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
};
