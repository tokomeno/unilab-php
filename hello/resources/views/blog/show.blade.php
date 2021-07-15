@extends('inc.layout')

@section('content')

<a href="/blog">Go Back</a>


<h3> {{$blog->title}}</h3>

<a href="/blog/{{$blog->id}}/edit">Edit Blog</a>

<p>
    {{$blog->text}}
</p>


@endsection
