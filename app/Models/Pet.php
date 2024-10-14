<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    // Define fillable fields for mass assignment
    protected $fillable = [
        'name', 
        'weight', 
        'breed', 
        'gender', 
        'dob', 
        'color', 
        'message', 
        'image',
    ];

    // Cast attributes to appropriate types
    protected $casts = [
        'dob' => 'date', // Cast 'dob' to a date object
        'weight' => 'float', // Ensure 'weight' is treated as a float
    ];

    // Accessors (optional): To manipulate attributes before sending to views
    public function getNameAttribute($value)
    {
        return ucfirst($value); // Capitalize the first letter of the name
    }

    // Mutators (optional): To manipulate attributes before saving to the database
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value); // Save the name in lowercase
    }

    // Example relationship: if a user owns multiple pets (optional)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Example relationship: if the pet has appointments (optional)
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
