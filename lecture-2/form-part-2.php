<?php
if (isset($_GET['age']) && $_GET['age']) {
    echo 'Hello your age is ' . $_GET['age'];
}

echo "<br>";

if (isset($_GET['name']) && $_GET['name']) {
    echo 'Hello your name is ' . $_GET['name'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form>

        Name:
        <input type="text" name="name">

        <br>
        Age:
        <input type="text" name="age">

        <button>
            Send
        </button>
    </form>


</body>

</html>
