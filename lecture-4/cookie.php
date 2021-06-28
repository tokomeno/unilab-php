<?php

if (isset($_POST['name'])) {
    $userName =  $_POST['name'];
    setcookie('userName', $userName, time() + (86400 * 30));
    echo 'HELLO ' . $userName;
}
?>

<?php if (isset($_COOKIE['userName'])) : ?>
    You name is <?= $_COOKIE['userName'] ?>
<?php else : ?>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="type your name">
    </form>
<?php endif; ?>
