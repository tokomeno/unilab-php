<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {

        return view('contact');
    }


    public function save(Request $request)
    {



        $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'min:9', 'max:9'],
            'message' => ['required', 'min:10']
        ]);

        // $contact = new Contact();
        // $contact->name =  $request->name;
        // $contact->email =  request('email');
        // $contact->phone = request()->phone;
        // $contact->message = request()->message;
        // $contact->save();


        Contact::create([
            "name" => $request->name,
            "email" =>  request('email'),
            "phone" => request()->phone,
            "message" => request()->message,
        ]);



        session()->flash('msg', 'Your info have been saved, Thank you!');


        return redirect()->back();
    }
}
