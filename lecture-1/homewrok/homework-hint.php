<?php
$students = [
    'lasha',
    'nika',
    'nino',
    'ana',
    'mari',
    'gio'
];

$hours = [
    12,
    12,
    11,
    8,
    21,
    11
];

foreach ($students as $key => $studentName) {
    $hour = $hours[$key];
    echo "{$studentName} დასწრების საათების რაოდენობა არის {$hour}";
}




$studentsInfo = [
    'lasha' => 12,
    'nika' => 12,
    'nino' => 11,
    'ana' => 8,
    'mari' => 21,
    'gio' => 11
];

foreach ($students as $studentName => $hour) {
    echo "{$studentName} დასწრების საათების რაოდენობა არის {$hour}";
}
