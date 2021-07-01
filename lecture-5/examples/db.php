<?php

// https://www.w3schools.com/php/php_mysql_connect.asp
// PDO და MYSQLI მაგალითებია აქ MYSQLI არ გინდათ მარტო PDO გადახედეთ


$pdo = new PDO("mysql:host=localhost;dbname=admin", 'root', '');
// set the PDO error mode to exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// GET ALL USERS
$stm = $pdo->prepare("SELECT * FROM users");
$stm->execute();
$users = $stm->fetchAll(PDO::FETCH_ASSOC);

//////////////////////// INSERT
$stm = $pdo->prepare("INSERT INTO users (name, age, profile_pic ) values ('SDF', 21, '')");

$name = "name";
$age = "name";
$profile_pic = "profile_pic.jpg";

$stm = $pdo->prepare("INSERT INTO users (name, age, profile_pic) VALUES (:name, :age, :profile_pic)");

$stm->bindParam(':name', $name);
$stm->bindParam(':age', $age);
$stm->bindParam(':profile_pic', $profile_pic);

$stm->execute();

//////////////////////// DELETE
$id = 4; // ეს იქნება ფორმიდან წამოსული ინფო
$stm = $pdo->prepare("DELETE FROM users where id = :id");
$stm->bindParam(':id', $id);
$stm->execute();


/////////////////// update
$id = 11; // ეს იქნება ფორმიდან წამოსული ინფო
$stm = $pdo->prepare("UPDATE users SET name = :name, age = :age, profile_pic = :profile_pic WHERE id = :id");
$age = 23;
$name = 'new name';
$profile_pic = 'profile_pic';
$stm->bindParam(':id', $id);
$stm->bindParam(':age', $age);
$stm->bindParam(':name', $name);
$stm->bindParam(':profile_pic', $profile_pic);
$stm->execute();
