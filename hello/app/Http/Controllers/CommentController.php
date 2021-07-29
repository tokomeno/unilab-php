<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function save(Request $request){


        $request->validate([
            'text' => ['required'],
            'blog_id' => ['exists:App\Models\Blog,id'],
        ]);

        Comment::create([
            'text' =>   $request->text,
            'blog_id' => $request->blog_id,
            'user_id' => auth()->id()
        ]);


        return redirect()->back();
    }
}
