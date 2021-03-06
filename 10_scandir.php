<?php

$files[] = "/var/www/homework.com/public_html";
$results = [];
$max_iterations = 1000;
$i = 0;
while(count($files)) {
    $i++;
    $file = array_shift($files);
    $results[$file] = $file;
    if (is_dir($file)) {
        $files_tmp = scandir($file);
        foreach ($files_tmp as $file_tmp) {
            if ($file_tmp == '.' || $file_tmp == '..') {
                continue;
            }
            $files[] = $file . DIRECTORY_SEPARATOR . $file_tmp;
        }
    }
    if ($i > $max_iterations) {
        break;
    }
}
ksort($results);
//print_r($results);

$str = '';
foreach ($results as $index => $val) {
    $str = $str . PHP_EOL . $val;
}
//print_r($str);