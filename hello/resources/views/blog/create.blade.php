@extends('layout.layout')


@section('content')


<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Create Blog</h1>
                </div>
            </div>
        </div>
    </div>
</header>

{{-- @if ($errors->any())

@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach

@endif --}}

<div class="container">


<form action="/blog/save" method="POST">
    @csrf

    <label for="">Title</label>
    <input class="form-control" type="text" name="title">
    @if ($errors->has('title'))
    @foreach ($errors->get('title') as $error)
    <li>{{ $error }}</li>
    @endforeach
    @endif

    <br>


    <label for="">Text</label>

    <textarea  class="form-control" name="text" id="" cols="30" rows="10"></textarea>
    @if ($errors->has('text'))
    @foreach ($errors->get('text') as $error)
    <li>{{ $error }}</li>
    @endforeach

    @endif

    <br>

    <label for="">Category</label>
    <select  class="form-control" name="category_id" id="cars">
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




    <button class="btn btn-success">Save</button>

</form>
</div>

@endsection
