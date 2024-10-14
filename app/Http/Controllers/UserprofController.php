<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserprofController extends Controller
{
    //
    public function showProfile()
    {
        
        return view('user-pfp.profile');
    }
    public function showPet()
    {
        
        return view('user-pfp.pet');
    }
}
