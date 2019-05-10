<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('authors_id');
            $table->string('publisher_id');
            $table->string('title');
            $table->increments('isbn');
            $table->string('category');
            $table->string('publisher_year');
            $table->timestamps();

            $table->foreign('authors_id')->references('id')->on('authors')->onDelete('cascade');
            $table->foreign('publisher_id')->references('id')->on('publisher')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
