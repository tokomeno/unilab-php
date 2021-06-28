<?php

include('./helpers.php');


$users = getUsersInfoFromFile();

$key = $_POST['key'];


if(! isset($users[$key])  ){
    echo "INFO IS WRONG";
    die();
}


$user = $users[$key];

$user['name'] = $_POST['name'];
$user['age'] = $_POST['age'];

$users[$key] = $user;

saveUserInfoInFile($users);

?>

<h4>User info have been updated</h4>

<br>
<a href="http://localhost/unilab/lecture-4/index.php">Go Back</a>
