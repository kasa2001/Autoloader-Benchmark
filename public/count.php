<?php

$file = fopen("result.txt", "r");

$i = 0;
while(($data = fgetcsv($file)) != null)
{
	$i += $data[0];
}

echo "dedicate: " . ($i/100);

file_put_contents("avg.txt", "dedicate: " . ($i/100) . "\n");

fclose($file);

$file = fopen("result_composer.txt", "r");

$i = 0;
while(($data = fgetcsv($file)) != null)
{
        $i += $data[0];
}
echo "\n";
echo "composer: " . ($i/100);
file_put_contents("avg.txt", "composer: " . ($i/100), FILE_APPEND);

fclose($file);
