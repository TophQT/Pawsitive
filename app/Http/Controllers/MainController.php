<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
     // Function to display the main page
     public function index()
     {
         return view('main.index');  // Pointing to resources/views/main/index.blade.php
     }
     public function showSelect()
    {
        return view('main.select');
    }
}
