<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking; // Make sure you have a Booking model

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'pet_name' => 'required|string|max:255',
            'pet_type' => 'required|string|max:255',
            'pet_breed' => 'required|string|max:255',
            'pet_age' => 'required|integer',
            'problem' => 'nullable|string|max:255',
            'illness_period' => 'nullable|string|max:255',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required|string|max:5',
            'clinic' => 'required|string|max:255',
            'consultation' => 'required|string|max:255',
            'payment_method' => 'nullable|string|max:255',
            'card_name' => 'nullable|string|max:255',
            'card_number' => 'nullable|string|max:255',
            'exp_card' => 'nullable|string|max:255',
            'cvv' => 'nullable|string|max:255',
            'service_type' => 'required|string|max:255', // Add validation for service_type
            'status' => 'nullable|string|max:255', // Add validation for status (optional)
        ]);
        
        // Create the booking in the database
        $booking = new Booking($request->all());

        // Set a default status if not provided
        if (!$request->has('status')) {
            $booking->status = 'Pending'; // Default status
        }

        $booking->save();
        
        // Redirect to the main page or any other page as needed
        return redirect()->route('main.index')->with('success', 'Booking created successfully!');
    }
}
