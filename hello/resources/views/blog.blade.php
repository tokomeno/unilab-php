@extends('layout.layout')

@section('content')

<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Clean Blog</h1>
                    <span class="subheading">A Blog Theme by Start Bootstrap</span>

                    
                    <form class="mt-5" method="GET" action="">
                        <div class="form-control">
                            <input type="date" value="{{request('date')}}" class="form-control" name="date" placeholder="date">
                        </div>
                        <div class="form-control d-flex">
                            <select class="form-control" name="category_id" id="">
                                <option value="">Choose Category</option>
                                @foreach ($categories as $category)
                                <option
                                {{-- @if($category->id == request('category_id')) selected @endif --}}
                                {{$category->id == request('category_id') ? 'selected' : ''}} 
                                value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                           
                            <input type="text" value="{{request('search')}}" name="search" placeholder="search blog..." class="form-control">
                            <button class="btn btn-sm btn-primary ">Search</button>
                        </div>
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">

            @foreach ($blogs as $blog)
            <!-- Post preview-->
            <div class="post-preview">
                <a href="/blog/{{$blog->id}}">
                    <h2 class="post-title">{{$blog->title}}</h2>
                    <h3 class="post-subtitle">{{$blog->text}}</h3>
                </a>
                @if ($blog->category)
                <i>{{$blog->category->name}}</i>
                @endif

                <p class="post-meta">
                    {{$blog->created_at}}
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            @endforeach





            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts
                    →</a></div>
        </div>
    </div>
</div>

@endsection
