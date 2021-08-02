<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/">Hello Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/contact">Contact</a></li>





                @auth


                @if (auth()->user()->isAdmin())
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('admin.index')}}">Admin</a>
                </li>
                @endif



                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#">{{auth()->user()->name}}</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('blog.create')}}">Add
                        Blog</a></li>

                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="btn btn-default nav-link px-lg-3 py-3 py-lg-4" href="/logout">Logout</button>
                    </form>
                </li>
                @endauth


                @guest

                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/login">Login</a></li>

                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/register">Register</a></li>

                @endguest





            </ul>
        </div>
    </div>
</nav>
