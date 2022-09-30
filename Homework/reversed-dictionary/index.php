<?php

$words_dictionary = [
    "Hi" => "Привіт",
    "Bye" => "Бувай",
    "I" => "Я",
    "There" => "Там",
    "Awesome" => "Круто",
    "Send" => array("відправити", "виправити")
];

//print_r(array_flip($words_dictionary));
$ua_translate = [];

foreach ($words_dictionary as $en_word => $ua_word ) {
    if (!is_array($ua_word)){
        $ua_translate[$ua_word][] = $en_word;
    }
    else{
        foreach ($ua_word as $word) {
            $ua_translate [$word][] = $en_word;
        }
    }
}
print_r($ua_translate);