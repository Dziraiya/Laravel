<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');

            //$table->foreignId('category_id')->constrained('categories');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                  ->on('categories')
                  ->references('id')
                  ->cascadeOnDelete();

            $table->string('title');
            $table->string('slug');
            $table->string('text')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('news');
    }
}
