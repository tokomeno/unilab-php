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


    <button>Save</button>

</form>
@endsection
