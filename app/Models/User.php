<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'role_id',
        'profile_image',
    ];

    public function role()
{
    return $this->belongsTo(Role::class);
}


    /**
     * The attributes that should be hidden for serialization.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',  // Works in Laravel 12+
    ];

    /**
     * Ensure password is always hashed (For Laravel 11 and below)
     */
    public function setPasswordAttribute($value)
    {
        if (!empty($value)) {
            $this->attributes['password'] = bcrypt($value);
        }
    }

    /**
     * Accessor for Profile Image (Returns Full URL)
     */
    public function getUserProfileAttribute($value)
    {
        return $value ? asset('storage/' . $value) : asset('AdminLTE/dist/img/user2-160x160.jpg');
    }
}
