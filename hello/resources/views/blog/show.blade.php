@extends('inc.layout')

@section('content')

<a href="/blog">Go Back</a>


<a href="/blog/{{$blog->id}}/edit">Edit Blog</a>


<h3> {{$blog->title}}</h3>


@if ($blog->category)
<i> {{$blog->category->name}}</i>
@endif


<p>
    {{$blog->text}}
</p>


<ul>
    @foreach ($blog->comments as $comment)
    <li>
        {{$comment->text}}
    </li>
    @endforeach
</ul>


<hr>



@if ($errors->any())
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
@endif





<h4>Add your comment</h4>


<form action="/comments" method="POST">
    @csrf

    <input type="hidden" name="blog_id" value="{{$blog->id}}">
    <textarea name="text" id="" cols="30" rows="10"></textarea>

    <button>Add comment</button>
</form>


<hr>

@endsection
