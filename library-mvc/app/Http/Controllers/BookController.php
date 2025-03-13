<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show()
    {
        $books = [
            new Book(['title' => 'Eleanor & Park', 'author' => 'Rainbow Rowell', 'publication_year' => 2012]),
            new Book(['title' => 'Fangirl', 'author' => 'Rainbow Rowell', 'publication_year' => 2013]),
            // Add more books as needed
        ];

        return view('items', ['books' => $books]);
    }
}
