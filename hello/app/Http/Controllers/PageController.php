<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{


  

    public function home()
    {

        $user = request('name');
        // $user = "Eni";

        return view('testi', compact('user'));
    }

    public function about()
    {
        return view('about');
    }
}
