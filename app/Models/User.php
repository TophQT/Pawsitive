<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail; // Optional, if using email verification
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail // Add if using email verification
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'first_name', // Change to first_name
        'last_name',  // Change to last_name
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
