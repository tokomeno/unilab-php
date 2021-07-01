<?php



function connectDB()
{

    $pdo = new PDO("mysql:host=localhost;dbname=admin", 'root', '');
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}


function getUsersFromDB($pdo)
{
    $stm = $pdo->prepare("SELECT * FROM users");
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
}

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
