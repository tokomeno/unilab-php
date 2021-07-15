<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>
        <a href="/">Home</a>
        <a href="/blog">blog</a>
        <a href="/blog/create">Add new Blog</a>
    </nav>

    <hr>

    @yield('content')

    <hr>

    <footer>
        This is footer
    </footer>


</body>

</html>
