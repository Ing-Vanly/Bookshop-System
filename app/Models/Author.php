<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Author extends Model
{
    use HasFactory;

    // The fields that are mass assignable
    protected $fillable = ['first_name', 'last_name', 'email', 'password', 'phone_number', 'profile_image'];

    // Mutator to hash the password before saving
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    // Relationship with Book
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
