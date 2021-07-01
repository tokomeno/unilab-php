<?php

include('./helpers.php');

// $_FILES - ინახება უზერის მიერ ატვირთული ფაილები მასივის ტიპის ცვლაიდ
//  $_POST  - ინახება უზერის მიერ შევსებული ინფოები ფომრიდან


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fileName = null;
    if ($_FILES['profile_pic']['tmp_name']) {
        // FILE UPLOAD
        $extension = pathinfo($_FILES["profile_pic"]['name'], PATHINFO_EXTENSION);
        $fileName = rand(999, 9999999999999) . ".$extension";
        $filePath =  'photos/' . $fileName;
        move_uploaded_file(
            $_FILES['profile_pic']['tmp_name'],
            $filePath
        );
    }

    $name  =  $_POST['name'];
    $age  = (int) $_POST['age'];
    $profile_pic  = $fileName;
    $pdo = connectDB();

    $stm = $pdo->prepare("INSERT INTO users (name, age, profile_pic) VALUES (:name, :age, :profile_pic)");

    $stm->bindParam(':name', $name);
    $stm->bindParam(':age', $age);
    $stm->bindParam(':profile_pic', $profile_pic);

    $stm->execute();

} else {
    echo 'form is not submited';
    die();
}


echo 'New user have been saved!';


?>

<br>
<a href="http://localhost/unilab/lecture-5/index.php">Go Back</a>
