<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->unsignedBigInteger("book_id")->primary();
            $table->timestamps();
            $table->integer("goodreads_book_id");
            $table->integer("best_book_id");
            $table->integer("work_id");
            $table->integer("books_count");
            $table->bigInteger("isbn")->nullable();
            $table->bigInteger("isbn13")->nullable();
            $table->text("authors");
            $table->integer("original_publication_year")->nullable();
            $table->string("original_title")->nullable();
            $table->string("title")->nullable();
            $table->tinyText("language_code")->nullable();
            $table->float("average_rating");
            $table->integer("ratings_count");
            $table->integer("work_ratings_count");
            $table->integer("work_text_reviews_count");
            $table->integer("ratings_1");
            $table->integer("ratings_2");
            $table->integer("ratings_3");
            $table->integer("ratings_4");
            $table->integer("ratings_5");
            $table->string("image_url");
            $table->string("small_image_url");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
