<?php

$words_dictionary1 = [
    "Hi" => "Привіт",
    "Bye" => "Бувай",
    "I" => "Я",
    "There" => "Там",
    "Awesome" => "Круто",
    "Send" => "виправити"
];
$words_dictionary2 = [
    "Where" => "Де",
    "Hi" => "Хай",
    "Old" => "Старий",
    "Send" => "відправити",
    "Bye" => "До скорого"
];

print_r(array_merge_recursive($words_dictionary1, $words_dictionary2));