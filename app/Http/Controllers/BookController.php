<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController
{
    public function index() {
        return view('index', [
            'books' => Book::all()
        ]);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year
        ]);

        return redirect('/books');
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
        $book->title = $request->title;
        $book->author = $request->author;
        $book->year = $request->year;
        $book->save();
        return redirect("/books/{$book->id}");
    }

    public function destroy(Book $book) {
        Book::destroy($book->id);

        return redirect('/books');
    }
}
