<?php
session_start();


if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === 'admin' &&  $_POST['password']  ===  "123") {
        $_SESSION['isLoggedIn'] = true;

        echo "Hello {$_POST['username']} <br>";
        echo "<a href='/unilab/lecture-5/admin.php'>Go to admin panel</a>";
    } else {
        echo 'User info is incorrect';
    }
}




















// $_SESSION['user'] = [
//     'username' => $_POST['username'],
//     'password' => $_POST['password'],
// ];
