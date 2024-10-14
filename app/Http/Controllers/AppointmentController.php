<?php

namespace App\Http\Controllers;

use App\Models\Booking; // Ensure you import the Booking model
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    // Method to show the appointments
    public function showAppointments()
    {
        $appointments = Booking::paginate(10); // Get appointments with pagination
        return view('admin.appointments', compact('appointments')); // Return the correct view
    }

    // Method to update the appointment status
    public function updateStatus(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'status' => 'required|in:completed,processing,on-hold,cancelled', // Adjust based on your status options
        ]);

        // Find the appointment by ID and update the status
        $appointment = Booking::findOrFail($id); // Find the appointment by ID
        $appointment->status = $request->input('status'); // Update the status
        $appointment->save(); // Save the changes

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Appointment status updated successfully.'); 
    }
}
