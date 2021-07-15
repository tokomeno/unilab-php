<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{





    public function index()
    {

        $blogs = Blog::all();

        // dd($blogs->toArray());

        return view('blog', ['blogs' => $blogs]);
    }

    public function show($id)
    
    {

         
        $blog = Blog::findOrFail($id);
        
        
        // $blog = Blog::find($id);
        // if(!$blog){
        //     abort(404);
        // }
        

        return view('blog.show', compact('blog'));
    }

    public function create()
    {

        return view('blog.create');
    }



    public function save()
    {
        
        
        request()->validate([
            'title' => ['required'],
            'text' => ['required',  'min:10'],
        ]);
        


        $blog = new Blog;
        $blog->title = request()->title;
        $blog->text = request()->text;
        $blog->save();


        return redirect('/blog');
    }


    public function edit($id){

        $blog = Blog::findOrFail($id);

        return view('blog.edit', compact('blog'));
    }


    public function update($id){

       
        $blog = Blog::findOrFail($id);
        $blog->title = request()->title;
        $blog->text = request()->text;
        $blog->save();

        return redirect("/blog/{$blog->id}");

    }
}
