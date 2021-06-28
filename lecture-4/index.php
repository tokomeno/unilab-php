<?php
session_start();

if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']) {
    header("Location: http://localhost/unilab/lecture-4/admin.php"); 
    exit();
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


    Login Page

    <form action="login-handler.php" method="POST">

        <input type="text" placeholder="username" name="username">

        <br>
        <input type="text" placeholder="password" name="password">


        <button>LOGIN</button>
    </form>
</body>

</html>
