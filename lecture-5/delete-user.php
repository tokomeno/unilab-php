<?php

include('./helpers.php');



$pdo = connectDB();

$stm = $pdo->prepare("DELETE FROM users where id = :id");
$id = $_POST['id'];
$stm->bindParam(':id', $id);
$stm->execute();
 

echo "User has been removed";

?>

<a href="http://localhost/unilab/lecture-5/admin.php">Go Back</a>


