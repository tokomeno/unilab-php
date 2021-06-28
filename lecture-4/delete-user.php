<?php

include('./helpers.php');


$users = getUsersInfoFromFile();

$key = $_POST['key'];

$deletedUsers = $users[$key];

unset($users[$key]);

$users = array_values($users);

file_put_contents('user.txt', serialize($users));


echo "{$deletedUsers['name']} has been removed";

?>

<a href="/unilab/lecture-4">Go Back</a>


