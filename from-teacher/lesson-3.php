<?php

function sayHello()
{
    echo 'Hello!';
}

function getHello($name, &$output)
{
    $name .= 666;
    return 'Hello ' . $name . '!';
}

function superPow($number, $pow = 2)
{
    return pow($number, $pow);
}

function sum(...$numbers)
{
    $summa = 0;

    foreach ($numbers as $n) {
        $summa += $n;
    }

    return $summa;
}

$arr = [5, 6, 48, 9];

try {
    var_dump(
        superPow(2, 3),
        sum(1, 2, 8, 6),
        sum(8, 2),
        sum(...$arr)
    );
} catch (ParseError $e) {
    // echo $e->getMessage(), PHP_EOL;
    var_dump($e);
} finally {
    echo 'Выполнился блок finally', PHP_EOL;
}



// Часть 2

// include 'lesson-1.php';
// include_once 'lesson-1.php';

// require 'lesson-1.php';
// require_once 'lesson-1.php';

try {
    $config = include 'config.php';
    var_dump($config);
} catch (ParseError $e) {
    var_dump($e);
}