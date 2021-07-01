<?php


// https://www.w3schools.com/php/php_sessions.asp

session_start();

if (isset($_POST['name'])) {
    $_SESSION['userName'] = $_POST['name'];
}

if (isset($_POST['remove'])) {
    unset($_SESSION['userName']);
}
?>



<?php if (isset($_SESSION['userName'])) : ?>
    You name is <?= $_SESSION['userName'] ?>

    <form method="POST">
        <input type="hidden" name="remove" value="1">
        <button>
            Delete UserName Form Session</button>
    </form>


<?php else : ?>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="type your name">
    </form>
<?php endif; ?>
