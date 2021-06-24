<?php
require('./helpers.php');
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

    <?php $users = getUsersInfoFromFile();  ?>
    <?php foreach ($users as $user) : ?>
        <h5>
            <?= $user['name'] ?>
            <br>
            <?= $user['age'] ?>
        </h5>

        <img width="50" src="
        /unilab/lecture-3/photos/<?= $user['profile_pic'] ?>" />
        <hr>
    <?php endforeach; ?>



    <h2>ADD new users in db</h2>
    
    <form action="add-user.php" method="POST" enctype="multipart/form-data">
        <input type="text" placeholder="name" name="name">
        <br>

        <input type="number" placeholder="age" name="age">
        <br>

        <input type="file" placeholder="profile_pic" name="profile_pic">
        <br>

        <button>send</button>
    </form>


</body>

</html>
