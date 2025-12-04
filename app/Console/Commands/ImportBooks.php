<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Book;
use League\Csv\Reader;

class ImportBooks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-books';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Read a CSV file and save all records on Db';

    /**
     * Execute the console command.
     */
    public function handle()
    {   
        \App\Models\Book::truncate();

        $file = Reader::from("/home/guilherme/projetos/books.csv", 'r')
            ->setHeaderOffset(0)
            ->setEscape('');
        
        $records = $file->getRecords();

        foreach ($records as $record) {
            Book::create([
                "book_id" => $record["book_id"],
                "goodreads_book_id" => $record["goodreads_book_id"],
                "best_book_id" => $record["best_book_id"],
                "work_id" => $record["work_id"],
                "books_count" => $record["books_count"],
                "isbn" => $record["isbn"],
                "isbn13" => $record["isbn13"],
                "authors" => $record["authors"],
                "original_publication_year" => $record["original_publication_year"],
                "original_title" => $record["original_title"],
                "title" => $record["title"],
                "language_code" => $record["language_code"],
                "average_rating" => $record["average_rating"],
                "ratings_count" => $record["ratings_count"],
                "work_ratings_count" => $record["work_ratings_count"],
                "work_text_reviews_count" => $record["work_text_reviews_count"],
                "ratings_1" => $record["ratings_1"],
                "ratings_2" => $record["ratings_2"],
                "ratings_3" => $record["ratings_3"],
                "ratings_4" => $record["ratings_4"],
                "ratings_5" => $record["ratings_5"],
                "image_url" => $record["image_url"],
                "small_image_url" => $record["small_image_url"]
            ]);
        }
    }   
}
