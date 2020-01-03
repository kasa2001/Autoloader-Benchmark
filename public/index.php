<?php

$time = microtime(true);

include '../src/bootstrap.php';

for($i = 1; $i <= 100000; $i++) {
    $class = "App\Classes\Class$i";
    $classes = new $class;
}

$time1 = microtime(true);

file_put_contents("result.txt", ($time1 - $time) . "\n", FILE_APPEND);
