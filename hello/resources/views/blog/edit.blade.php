@extends('inc.layout')


@section('content')


<form action="/blog/{{$blog->id}}" method="POST">
    @csrf


    <label for="">Title</label>
    <input type="text" value="{{$blog->title}}" name="title">

    <br>


    <label for="">Text</label>

    <textarea name="text" id="" cols="30" rows="10">{{$blog->text}}</textarea>


    <button>Save</button>

</form>

@endsection
