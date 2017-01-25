<?php

$arr = [1, 2, 3, 4];
$arr[10] = 11;
$arr[] = 12;

// for ($i = 0, $n = count($arr); $i < $n; $i++) {
//     echo "$i - $arr[$i]\n";
// }

foreach ($arr as $key => $value) {
    echo "$key - $value\n";
}

$post = [
    'title' => 'Запись №1',
    'created' => date('Y-m-d H:i:s'),
    'content' => 'Текст записи',
];

$arr2 = [
    0 => null,
    50 => 50,
    'key' => 1,
];

foreach ($arr2 as $key => &$value) {
    echo "$key - $value\n";
}
