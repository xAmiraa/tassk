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
        Schema::create('table_admin', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('productId');
            $table->string('title');
            $table->integer('price');
            $table->string('description');
            $table->string('category');
            $table->string('image');
            $table->string('requestTYpe');
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
        Schema::dropIfExists('table_admin');
    }
};
