<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'price', 'author_id', 'genre_id', 'description', 'publication_date', 'cover_image', 'stock_quantity','rating'
    ];

    // Relationship with Author
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    // Relationship with Genre
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}

