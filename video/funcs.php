<?php

//1
print("1 \n");
$classes = [
    1, 2, 3
];
$students = [
    "Mark", "Sasha", "Bohdan"
];

print_r(array_combine($classes, $students));

//2
print("2 \n");

$names1 = array("Igor", "Oleg", "Slava");
$names2 = array("Slava", "Igor", "Alexa");

print_r(array_intersect($names1, $names2));

//3
print("3 \n");

$user1 = array('id'  => 1, 'red'  => 2, 'age'  => 3, 'fav-color' => "red");
$user2 = array('age' => 5, 'hobby' => "Programming", 'yellow' => 7, 'id' => 8);

var_dump(array_intersect_key($user1, $user2));

//4
print("4 \n");

$stuff = [
    "b" => "Book",
    "p" => "Pen",
    "l" => "laptop",
    "n" => "Notebook"
];

function test_print($item2, $key)
{
    echo "Letter $key. $item2\n";
}

array_walk($stuff, "test_print");