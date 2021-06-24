<?php


// შევამოწმოთ თუ ფორმა არის დასაბმითებული და $_GET მასივის ტიპის ცვლადში გვაქვს name და position KEY ჩანაწერი
// თუ მოცემული პირობა არის სწორი მაშინ უზერის გამოგზავნილი ინფო ფორმიდან შევინახოთ ფაილში
if (isset($_GET['name']) && isset($_GET['position'])) {
    $fileText = "UserName: {$_GET['name']}, position: {$_GET['position']}";
    file_put_contents('file_name.txt', $fileText);
}


$employ = [
    'name' => 'Nika',
    'position' => 'developer',
    'salary' => 1400,
    'currency' => 'gel',
    'hasInsurance' => false,
];

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

    <!-- როგორ იწერება HMTL კომენტარი https://www.w3schools.com/html/html_comments.asp -->

    <!-- Render user info -->
    <?php foreach ($employ as $key => $value) {
        echo "<h1>Employ {$key}: $value</h1>";
    }
    ?>



    <!-- Employ Form -->
    <!-- დამატებითი ინფო PHP FORM https://www.w3schools.com/php/php_forms.asp -->
    <form method="GET">
        Name:
        <input require type="text" name="name" value="<?= $employ['name'] ?>">
        <br />
        Position:
        <input require type="text" name="position" value="<?php echo $employ['position'] ?>">

        <button> Send </button>
    </form>




</body>

</html>
