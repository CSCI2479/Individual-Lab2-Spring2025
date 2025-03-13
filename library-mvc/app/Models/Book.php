<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'publication_year',
        // Add other attributes as needed
    ];

    public function __toString()
    {
        return $this->title . ' by ' . $this->author . ' (' . $this->publication_year . ')';
    }
}
