<?php

$numbers = [
    [10, -4, 55, 0, -4, 25],
    [10, -8, 5, 0, -1, 25],
    [5, -4, 52, 1, -4, 50],
];
$sum = 0;

function positive($var){
    return $var > 0;
}

foreach ($numbers as $key => $value) {
    $positiveArray = array_filter($value, "positive");
    $sum += (int)array_sum($positiveArray);
}

print($sum);

