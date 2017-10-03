<?php
// сканирование директорий при помощи рекурсии

function  print_directory($path, $nesting_level = 0)
    //$nesting_level = 0 - уровень вложенности
{
    if (!file_exists($path)) {
        return null;
    }
    $files = scandir($path);
    $spaces = str_pad(' ', $nesting_level * 4);
    foreach ($files as $file) {
        if ($file === '.' || $file === '..'){
            continue;
        }

        $file_path = $path . DIRECTORY_SEPARATOR . $file;
        $formated_str = $spaces . '%s' . $file . PHP_EOL;

        if (is_dir($file_path)) {
            echo sprintf($formated_str, '(d) ');
            print_directory($file_path, $nesting_level + 1);
        } else {
            echo sprintf($formated_str, '(f) ');
        }
    }
}

//$path = $_GET['path'] ?? 'D:\OSPanel\domains\source';
print_directory('D:\OSPanel\domains\source');
