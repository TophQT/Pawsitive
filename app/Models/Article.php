<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Specify the fillable properties
    protected $fillable = [
        'title',
        'category',
        'image',
        'description',
        'type'
    ];
}
