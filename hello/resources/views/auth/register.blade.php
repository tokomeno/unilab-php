@extends('layout.layout')


@section('content')


<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>Register</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">

    <form method="POST" action="/register" class="mb-5">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input value="{{old('email')}}" type="email" name="email" class="form-control" id="email" >

            @error('email')
            <p class="text-danger">
                {{$message}}
            </p>
            @enderror


        </div>


        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input value="{{old('name')}}" type="name" name="name" class="form-control" id="name" >
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        @error('name')
        <p class="text-danger">
            {{$message}}
        </p>
        @enderror



        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input value="" name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        @error('password')
        <p class="text-danger">
            {{$message}}
        </p>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>


@endsection
