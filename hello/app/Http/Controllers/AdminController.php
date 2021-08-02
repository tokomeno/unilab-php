<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $blogCount = Blog::count();
        $commentCount = Comment::count();

        $contacts = Contact::latest()->get();



        return view('admin.index', compact('blogCount', 'commentCount', 'contacts'));
    }
}
