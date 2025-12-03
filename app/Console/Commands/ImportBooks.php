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
        $file = Reader::from("/home/guilherme/projetos/books.csv", 'r')
            ->setHeaderOffset(0)
            ->setEscape('');
        
        $header = $file->getHeader();
        dd($header);
    }   
}
