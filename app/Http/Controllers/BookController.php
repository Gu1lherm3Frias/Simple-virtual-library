<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController
{
    public function index() {
        return view('index', [
            'books' => Book::get()
        ]);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        Book::create([
            "goodreads_book_id" => (int) $request->goodreads_book_id,
            "best_book_id" => (int) $request->best_book_id,
            "work_id" => (int) $request->work_id,
            "books_count" => (int) $request->books_count,
            "isbn" => (int) $request->isbn,
            "isbn13" => (int) $request->isbn13,
            "authors" => $request->authors,
            "original_publication_year" => (int) $request->original_publication_year,
            "original_title" => $request->original_title,
            "title" => $request->title,
            "language_code" => $request->language_code,
            "average_rating" => (double) $request->average_rating,
            "ratings_count" => (int) $request->ratings_count,
            "work_ratings_count" => (int) $request->work_ratings_count,
            "work_text_reviews_count" => (int) $request->work_text_reviews_count,
            "ratings_1" => (int) $request->ratings_1,
            "ratings_2" => (int) $request->ratings_2,
            "ratings_3" => (int) $request->ratings_3,
            "ratings_4" => (int) $request->ratings_4,
            "ratings_5" => (int) $request->ratings_5,
            "image_url" => $request->image_url,
            "small_image_url" => $request->small_image_url
        ]);

        return redirect('/');
    }

    public function show(Book $book) {
        return view('show', [
            'book' => $book
        ]);
    }
    
    public function edit(Book $book) {
        return view('edit', [
            'book' => $book
        ]);
    }

    public function update(Request $request, Book $book) {
        $book->books_count = (int) $request->books_count;
        $book->isbn = (int) $request->isbn;
        $book->isbn13 = (int) $request->isbn13;
        $book->authors = $request->authors;
        $book->original_publication_year = (int) $request->original_publication_year;
        $book->title = $request->title;
        $book->language_code = $request->language_code;
        $book->image_url = $request->image_url;
        $book->small_image_url = $request->small_image_url;
        $book->save();
        return redirect("/{$book->id}");
    }

    public function destroy(Book $book) {
        Book::destroy($book->id);

        return redirect('/');
    }

    public function publicationByYear( int $year) {
        return view("");
    }
    
    public function publicationByAuthors( int $year) {
        return view("");
    }
    
    public function publicationByLanguage( int $year) {
        return view("");
    }
}
