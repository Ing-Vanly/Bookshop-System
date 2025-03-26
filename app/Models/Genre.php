<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    // This allows mass assignment for the 'name' attribute of Genre
    protected $fillable = ['name'];

    // This defines the relationship between Genre and Book
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}


