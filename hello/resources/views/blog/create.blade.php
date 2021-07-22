@extends('inc.layout')


@section('content')

{{-- @if ($errors->any())

@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach

@endif --}}



<form action="/blog/save" method="POST">
    @csrf

    <label for="">Title</label>
    <input type="text" name="title">
    @if ($errors->has('title'))
    @foreach ($errors->get('title') as $error)
    <li>{{ $error }}</li>
    @endforeach
    @endif

    <br>


    <label for="">Text</label>

    <textarea name="text" id="" cols="30" rows="10"></textarea>
    @if ($errors->has('text'))
    @foreach ($errors->get('text') as $error)
    <li>{{ $error }}</li>
    @endforeach

    @endif

    <br>

    <label for="">Category</label>
    <select name="category_id" id="cars">

        <option value="">No Category</option>
        @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach


    </select>


    @if ($errors->has('category_id'))

    @foreach ($errors->get('category_id') as $error)
    <li>{{ $error }}</li>
    @endforeach
    @endif




    <button>Save</button>

</form>
@endsection
