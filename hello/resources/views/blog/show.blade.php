@extends('layout.layout')

@section('content')

<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>{{$blog->title}}</h1>
                   


                    @if (auth()->check() && $blog->user_id === auth()->id())
                    <a class="btn btn-sm btn-primary" href="{{route('blog.edit', ['id' => $blog->id])}}">Edit</a>


                    <form method="POST" action="{{route('blog.delete', ['id' => $blog->id])}}">
                        @csrf
                        @method('delete')
                        <button class="btn btn-sm btn-danger" href="{{route('blog.delete', ['id' => $blog->id])}}">Delete</button>
                    </form>



                    @endif


                    <span class="meta">

                        {{$blog->created_at}}
                        <br>
                        @if ($blog->user)
                         <i>{{$blog->user->name}}</i>
                        @else
                        <i>No author</i>
                        @endif
                    </span>


                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">

    
<!-- Post Content-->
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                {{$blog->text}}
            </div>
        </div>
    </div>
</article>


<h5 class="">Comments: </h5>
@foreach ($blog->comments as $comment)
<article class="mb-4">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-10 col-lg-8 col-xl-7">
                {{$comment->text}}
            </div>
            <i>{{$comment->created_at->diffForHumans()}}</i>
            <i>Author: {{$comment->user->name}}</i>
        </div>
</article>
@endforeach


@if (auth()->check())
<form class="my-5" action="/comments" method="POST">
    @csrf

    <input type="hidden" name="blog_id" value="{{$blog->id}}">
    <div class="form-group">
        <label for="exampleInputEmail1">Text</label>
        <textarea name="text" class="form-control" cols="30" rows="10"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@else
    To add comment please <a href="/login">Login</a> or <a href="/register">Register</a>
@endif

</div>




@endsection
