<?php



$pdo = new PDO("mysql:host=localhost;dbname=admin", 'root', '');
// set the PDO error mode to exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$stm = $pdo->prepare("SELECT * FROM users");

$stm->execute();


$users = $stm->fetchAll(PDO::FETCH_ASSOC);




print_r($users);
