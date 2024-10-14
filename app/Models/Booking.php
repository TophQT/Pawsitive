<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'mobile_number',
        'email',
        'address',
        'pet_name',
        'pet_type',
        'pet_breed',
        'pet_age',
        'problem',
        'illness_period',
        'appointment_date',
        'appointment_time',
        'clinic',
        'consultation',
        'payment_method',
        'card_name',
        'card_number',
        'exp_card',
        'cvv',
        'status', // Added status field to fillable
        'service_type', // Add the new service_type field to fillable
    ];
}
