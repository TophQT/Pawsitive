<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;  //

class PetCareController extends Controller
{
    //
    public function index()
    {
        // Fetch all articles (for demonstration, filtering can be added later)
        $articles = Article::all();

        // Return view with articles data
        return view('petcare.index', compact('articles'));
    }
    public function showArticles()
    {

        return view('petcare.articles');
    }
}