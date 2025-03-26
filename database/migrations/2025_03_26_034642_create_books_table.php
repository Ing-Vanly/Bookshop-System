<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('price', 8, 2);
            $table->unsignedBigInteger('author_id'); // Foreign key to authors
            $table->unsignedBigInteger('genre_id');  // Foreign key to genres
            $table->text('description')->nullable();
            $table->date('publication_date')->nullable();
            $table->string('cover_image')->nullable(); // This is for the book cover image
            $table->integer('stock_quantity')->default(0);
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
};
