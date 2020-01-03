<?php

$time = microtime(true);

include '../src/bootstrap_vendor.php';

for($i = 1; $i <= 100000; $i++) {
    $class = "App\Classes\Class$i";
    $classes = new $class;
}

$time1 = microtime(true);

file_put_contents("result_composer.txt", ($time1 - $time) . "\n", FILE_APPEND);
