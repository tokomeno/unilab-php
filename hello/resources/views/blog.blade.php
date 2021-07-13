<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>
        This is Blog page
    </h1>

    <hr>

    <h2>
        ბლოგები სია
    </h2>



    @foreach ($blogs as $id => $blog)

    <h3><a href="/blog/{{$id}}">  {{$blog['title']}}  </a></h3>

    <p>
        {{$blog['text']}}
    </p>
    @endforeach



</body>

</html>
