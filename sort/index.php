<?php

$people = [
    "Shcherbak" => 2007,
    "Vertiy" => 2006,
    "Novosad" => 1964,
];

ksort($people);
print_r($people);

asort($people);
print_r($people);

// sort($people);
// print_r($people);