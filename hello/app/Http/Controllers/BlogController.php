<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
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

        return view('blog.index', compact('blogs', 'categories'));
    }

    public function show($id)
    {

        $blog = Blog::with('category')->findOrFail($id);
        // $blog = Blog::find($id);
        // if(!$blog){
        // abort(404);

        $blog->comments->load('user');
        // ეს ქვედა იგივეა ოღონდ რელაციის გარეშე ხელით წამოღება
        // $comments = Comment::where('blog_id', $blog->id)->latest()->get();
        // $comments = $blog->comments()->get();

        $blog->load('user');
        // $user = User::where('id', $blog->user_id)->first();


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
        $blog->user_id =  auth()->user()->id;
        $blog->save();


        return redirect()->route('blog.show', ['id' => $blog->id]);
    }


    public function edit($id)
    {

        $blog = Blog::findOrFail($id);

        if ($blog->user_id !== auth()->id()) {
            return redirect()->route('blog.index');
        }

        $categories = Category::get();

        return view('blog.edit', compact('blog', 'categories'));
    }


    public function update($id)
    {


        $blog = Blog::findOrFail($id);
        if ($blog->user_id !== auth()->id()) {
            return redirect()->route('blog.index');
        }
        $blog->title = request()->title;
        $blog->text = request()->text;
        $blog->save();

        return redirect("/blog/{$blog->id}");
    }



    public function destroy($id){

        $blog = Blog::findOrFail($id);
        if ($blog->user_id !== auth()->id()) {
            return redirect()->route('blog.index');
        }

        $blog->delete();

        return redirect()->route('blog.index')->with('msg', 'Blog have been deleted');
        


    }
}
