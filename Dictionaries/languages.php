<?php

$countries = [
    "Belgium" => [
       "French",
       "Dutch",
       "German" 
    ],
    "United Kingdom" => "English",
    "Switzerland" => [
       "German",
       "French",
       "Italian" 
    ],
    "Germany" => "German", 
    "Italy" => "Italian"
];

// echo "Сountries\n\n";
// foreach ( $countries as $key => $value ) {
//     echo "$key: \n";

//     if(is_array($value))
//         foreach ($value as $v)
//             echo "$v \t";
//     else echo "$value";

//     echo "\n\n";
// }
echo "\n\n\n\n";

$language = [];

foreach ( $countries as $country => $cl ) {
    if (!is_array ($cl)){
        $languages[$cl][] = $country;
    }
    else{
        foreach ($cl as $l) {
            $languages [$l][] = $country;
        }
    }
}
print_r($languages);