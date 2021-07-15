@extends('inc.layout')

@section('content')

<h1>
    This is Blog page
</h1>

<hr>

<h2>
    ბლოგები სია
</h2>



@foreach ($blogs as $blog)
<h3><a href="/blog/{{$blog->id}}"> {{$blog->title}} </a></h3>

<p>
    {{$blog->text}}
</p>
@endforeach

@endsection
