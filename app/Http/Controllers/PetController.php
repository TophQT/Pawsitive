<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PetController extends Controller
{
    // Show list of pets (index)
    public function index()
    {
        // Fetch pets for the authenticated user
        $pets = Pet::all(); // Modify this line to filter pets by authenticated user if needed
        return view('pets.index', compact('pets'));
    }

    // Store new pet
    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'weight' => 'required|numeric',
            'breed' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'dob' => 'required|date',
            'color' => 'required|string',
            'message' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Handle file upload
        $imagePath = $request->hasFile('image') ? $request->file('image')->store('pets', 'public') : null;

        // Create pet record
        Pet::create([
            'name' => $request->name,
            'weight' => $request->weight,
            'breed' => $request->breed,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'color' => $request->color,
            'message' => $request->message,
            'image' => $imagePath,
        ]);

        return redirect()->route('pets.index')->with('success', 'Pet added successfully!');
    }

    // Show a single pet
    public function show($id)
    {
        $pet = Pet::findOrFail($id);
        return view('pets.show', compact('pet'));
    }

    // Edit pet (show edit form)
    public function edit($id)
    {
        $pet = Pet::findOrFail($id);
        return view('pets.edit', compact('pet'));
    }

    // Update pet record
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'weight' => 'required|numeric',
            'breed' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'dob' => 'required|date',
            'color' => 'required|string',
            'message' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $pet = Pet::findOrFail($id);

        // Handle file upload if a new image is uploaded
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($pet->image) {
                Storage::disk('public')->delete($pet->image);
            }
            $imagePath = $request->file('image')->store('pets', 'public');
        } else {
            $imagePath = $pet->image; // Keep the existing image if none is uploaded
        }

        // Update pet details
        $pet->update([
            'name' => $request->name,
            'weight' => $request->weight,
            'breed' => $request->breed,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'color' => $request->color,
            'message' => $request->message,
            'image' => $imagePath,
        ]);

        return redirect()->route('pets.index')->with('success', 'Pet updated successfully!');
    }

    // Delete pet
    public function destroy($id)
    {
        $pet = Pet::findOrFail($id);
        
        // Delete the pet image if it exists
        if ($pet->image) {
            Storage::disk('public')->delete($pet->image);
        }

        $pet->delete();
        return redirect()->route('pets.index')->with('success', 'Pet deleted successfully!');
    }
}
