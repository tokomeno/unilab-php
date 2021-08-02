@extends('layout.layout')

@section('content')

<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>This is Admin</h1>
                    <br>
                    <p>
                        Total Blogs: {{$blogCount}}
                    </p>
                    <p>
                        Total Comments: {{$commentCount}}
                    </p>

                    @if (session('msg'))
                    <div class="alert alert-primary" role="alert">
                        {{session('msg')}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>


<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">

            @foreach ($contacts as $contact)
            <ul class="list-group">
                <li class="list-group-item active" aria-current="true">{{$contact->name}}</li>
                <li class="list-group-item">{{$contact->phone}}</li>
                <li class="list-group-item">{{$contact->email}}</li>
                <li class="list-group-item">{{$contact->message}}</li>

                <li class="list-group-item">{{$contact->created_at->diffForHumans()}}</li>
            </ul>
            <hr class="my-4" />
            @endforeach




        </div>
    </div>

    @endsection
