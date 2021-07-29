<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function index()
    {
        return view('auth.register');
    }

    public function save()
    {

        request()->validate([
            'email' => ['required', 'email', 'unique:users'],
            'name' => ['required', 'max:20'],
            'password' => ['required', 'min:6']
        ]);


        // $user = new User();
        // $user->email =  request()->email;
        // $user->name =  request()->name;
        // $user->password =  request()->password;
        // $user->save();

        $user = User::create([
            'email' => request()->email,
            'name' => request()->name,
            'password' => bcrypt(request()->password),
        ]);

        auth()->login($user);


        return redirect("/")->with('msg', 'You have been registered');
     
    }
}
