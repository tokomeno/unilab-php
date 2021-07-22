<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {

        return view('contact');
    }


    public function save(){

          
        // request validation

        $name = request()->name;
        $email = request('email');
        $phone = request()->phone;



        // 
            // SAVE TO DB
        // 


        session()->flash('msg', 'Your info have been saved, Thank you!');


        return redirect()->back();



    }
}
