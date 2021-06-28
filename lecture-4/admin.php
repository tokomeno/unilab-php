<?php
session_start();

require('./helpers.php');

 
if (!isset($_SESSION['isLoggedIn'])) {
    header("Location: http://localhost/unilab/lecture-4/index.php");
    exit();
} 

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


    <a href="/unilab/lecture-4/logout.php">Log Out</a>

    <hr>



    <?php $users = getUsersInfoFromFile();  ?>
    <?php foreach ($users as $k => $user) : ?>


        <form action="update-user.php" method="POST">


            KEY:
            <input name="key" type="text" value="<?= $k ?>">

            <br>
            <br>

            <input name="name" value="<?= $user['name'] ?>">
            <br>
            <input name="age" value="<?= $user['age'] ?>">
            <br>

            <button>Update</button>
        </form>

        <br>



        <?php if ($user['profile_pic']) : ?>
            <img width="50" src="
/unilab/lecture-4/photos/<?= $user['profile_pic'] ?>" />
        <?php endif; ?>



        <form method="POST" action="delete-user.php">
            <input name="key" hidden type="text" value="<?= $k ?>">
            <button>Delete User</button>
        </form>
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
