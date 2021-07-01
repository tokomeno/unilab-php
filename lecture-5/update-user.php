<?php

include('./helpers.php');


$pdo = connectDB();


$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];

$stm = $pdo->prepare("UPDATE users SET name = :name, age = :age WHERE id = :id");

$stm->bindParam(':id', $id);
$stm->bindParam(':age', $age);
$stm->bindParam(':name', $name);
$stm->execute();


?>


<h4>User info have been updated</h4>

<br>
<a href="http://localhost/unilab/lecture-5/admin.php">Go Back</a>
