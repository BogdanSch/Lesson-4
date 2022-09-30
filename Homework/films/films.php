<?php

$films = [
    "Star Wars Episode 3" => [ "Lucas", 2005 ],
    "Dune" => [ "Villeneuve", 2021 ],
    "Avenges 1" => [ "Whedon", 2012 ],
    "Thor 3" => [ "Waititi", 2017 ],
];

function print_info($item, $key){
    echo "<span style=\"background: yellow; color: blue;\"> $key. \nProducer $item[0]\n Date $item[1]\n</span><br>";
}

//name
ksort($films);
array_walk($films, "print_info");
//last name
function last_name($a, $b){
    if ($a[0] < $b[0])
      return -1;
    elseif ($a[0]==$b[0])
      return 0;
    else
      return 1;
}
  
uasort($films, "last_name");
array_walk($films, "print_info");

//date
function release_date($a, $b){
    if ($a[1] < $b[1])
      return -1;
    elseif ($a[1]==$b[1])
      return 0;
    else
      return 1;
}
  
uasort($films, "release_date");
array_walk($films, "print_info");