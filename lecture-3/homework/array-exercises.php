<?php


$numArrays = [1, 2, 3, 4, 5, 6];


// მასივის ყველა ელემენტის მნიშვნელობა გააორმაგეთ
// foreach ($numArrays as $k => $number) {
//     $numArrays[$k] = $number + $number;
// }



// დაბეჭდეთ ეკრანზე მხოლოდ ლუწი რიცხვები მოცეუმლი მასივიდან
foreach ($numArrays as $number) {
    if ($number % 2 == 0) {
        echo $number;
    }
}




// შექმენით ფუნქცია რომელიც მიიღებს ორ პარამეტრს მასივს და keys 
// მოცემულ ქიზე თუ არსებობს ჩანაწერი წაშლის და დააბრუნებს ახალ მასივს
// თუ არ არსებობს დაარბუნებს false-ს
function deleteItem($array, $key)
{
    if (isset($array[$key])) {
        unset($array[$key]);
        return $array;
    } else {
        return false;
    }
}

$a = [1, 2, 3];
$res = deleteItem($a, 0);
// print_r($res);





// დაწერეთ ფუნქცია რომელიც პირველ პარამეტრად მიიღებს რიცხვების მასივს და მეორე პარამეტრად რიცხვს
// ფუქნციამ უნდა წაშალოს ყველა რიცხვი მასივიდან რომელიც ზუსტად 
// არ გაიყოფა მეორე გამოდმოცემულ პარამეტრზე
function removeItems($array, $number)
{
    // foreach ($array as $k => $item) {
    //     $nashti = $item % $number;
    //     echo $nashti;
    //     if ($item % $number !== 0) {
    //         unset($array[$k]);
    //     }
    // }
    // return $array;


    return array_filter($array, function ($item) use ($number) {
        return $item % $number === 0;
    });
}


$a = [1, 2, 3];
$res = removeItems($a, 2);
print_r($res);



