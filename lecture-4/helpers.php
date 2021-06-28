<?php



function getUsersInfoFromFile()
{
    $serilizedUsers = file_get_contents('user.txt');
    $users = unserialize($serilizedUsers);
    if (!$users) {
        return [];
    }
    return $users;
}

function saveUserInfoInFile(array $users)
{
    $serilizedArray = serialize($users);
    file_put_contents('user.txt', $serilizedArray);
}


function dump($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
