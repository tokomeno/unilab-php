<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {

        
        $blogs = Blog::with('category')->latest()
            ->filter()
            ->get();

        // $blogs->load('category');


         
        $categories = Category::orderBy('name', 'asc')->get(); 

        return view('blog', compact('blogs', 'categories'));
    }

    public function show($id)
    {

        $blog = Blog::with('category')->findOrFail($id);

        // $comments = Comment::where('blog_id', $blog->id)->latest()->get();
        // $comments = $blog->comments()->get();

         $blog->comments->load('user');

        // $blog = Blog::find($id);
        // if(!$blog){
        // abort(404);


        return view('blog.show', compact('blog'));
    }

    public function create()
    {
        $categories = Category::orderBy('name', 'asc')->get();


        return view('blog.create', compact('categories'));
    }



    public function save()
    {

        request()->validate([
            'title' => ['required'],
            'text' => ['required',  'min:10'],
            'category_id' => ['nullable', 'exists:App\Models\Category,id']
        ]);

        $blog = new Blog;
        $blog->title = request()->title;
        $blog->text = request()->text;
        $blog->category_id = request()->category_id;
        $blog->save();

        return redirect('/');
    }


    public function edit($id)
    {

        $blog = Blog::findOrFail($id);

        return view('blog.edit', compact('blog'));
    }


    public function update($id)
    {


        $blog = Blog::findOrFail($id);
        $blog->title = request()->title;
        $blog->text = request()->text;
        $blog->save();

        return redirect("/blog/{$blog->id}");
    }
}
