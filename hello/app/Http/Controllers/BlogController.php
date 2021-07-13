<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public $blogs;

    public function __construct()
    {

        $this->blogs = [
            0 => [
                'title' => "some info about php",
                'text' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo, ullam. Id deserunt fuga sed modi sapiente ipsum esse dolores necessitatibus exercitationem? Ratione id eum inventore sequi odit labore nesciunt aperiam.'
            ],
            1 => [
                'title' => "Java",
                'text' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo, ullam. Id deserunt fuga sed modi sapiente ipsum esse dolores necessitatibus exercitationem? Ratione id eum inventore sequi odit labore nesciunt aperiam.'
            ],
            2 => [
                'title' => "Laravel",
                'text' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo, ullam. Id deserunt fuga sed modi sapiente ipsum esse dolores necessitatibus exercitationem? Ratione id eum inventore sequi odit labore nesciunt aperiam.'
            ],
            3 => [
                'title' => "Javascript",
                'text' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo, ullam. Id deserunt fuga sed modi sapiente ipsum esse dolores necessitatibus exercitationem? Ratione id eum inventore sequi odit labore nesciunt aperiam.'
            ]
        ];
    }

    public function index()
    {


        return view('blog', ['blogs' => $this->blogs]);
    }

    public function show($id)
    {
        $blog = $this->blogs[$id];
 
        return view('blog-show', compact('blog'));
    }
}
