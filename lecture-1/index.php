<?php

function calcEmploySalary($workingHour, $hourRate = 10)
{
    return $workingHour * 4 * $hourRate;
}

function renderUserSalary($userName, $salary)
{
    echo "$userName შენი გამოიმუშავე $salary ლარი";
    echo '<br>';
}

$employ1 = 'ლუკა';
$employ2 = 'ზუკა';
$employ1Salary = calcEmploySalary(40);
$employ2Salary = calcEmploySalary(40, 20);

renderUserSalary($employ1, $employ1Salary);
renderUserSalary($employ2, $employ2Salary);


$employNames = [
    'zuka',
    'lasha',
    'nika',
    'nino',
    'ana',
    'mari',
    'gio'
];
$workingHours = [
    10,
    20,
    24,
    40,
    43,
    15,
    18
];

foreach ($employNames as $key => $name) {
    $workingHour =  $workingHours[$key];
    $salary = calcEmploySalary($workingHour);
    renderUserSalary($name,  $salary);
}


for ($i = 0; $i < count($employNames); $i++) {
    $workingHour =  $workingHours[$i];
    $salary = calcEmploySalary($workingHour);
    $name = $employNames[$i];
    renderUserSalary($name,  $salary);
}



$employs = [
    'zuka' => 10,
    'lasha' => 20,
    'nika' => 20,
    'nino' => 20,
    'ana' => 20,
    'mari' => 20,
    'gio' => 20
];

foreach ($employs as $name => $workingHour) {
    $salary = calcEmploySalary($workingHour);
    renderUserSalary($name,  $salary);
}

$info = [
    'programing' => [
        'php',
        'java',
        'ruby',
        'javascript'
    ],
    'regular' => [
        'English',
        'Georgina'
    ]
];

foreach ($info as $type => $langArray) {
    echo '<br/>';
    echo $type;
    echo '<br/>';
    foreach ($langArray as $lang) {
        echo $lang;
        echo '<br/>';
    }
}
