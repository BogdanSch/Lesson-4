<?php

$users1 = ["John" => "qwerty", "Nicole" => "asdf", "Mark" => "ww"];
$users2 = ["Joan" => "1234", "Mark" => "poiu", "Nicole" => "ggg"];

//print_r(array_merge($users1, $users2));

$merged_user = array_merge_recursive($users1, $users2);
$same_keys = array_intersect_key($users1, $users2);

print_r(array_intersect_key($user_last, $same_keys));
//print_r(array_diff_key())