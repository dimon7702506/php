<?php

$max_level = 0;

function scan_directory_recursive($path, $nesting_level = 0): array
{
    global $max_level;

    $result = [];
    if (!file_exists($path)){
        return [];
    }
    $files = scandir($path);

    $item = [
        'type' => '',
        'name' => '',
        'level' => $nesting_level,
        'children' => []
    ];

    if ($max_level < $nesting_level) {
        $max_level = $nesting_level;
    }

    foreach ($files as $file) {
        if ($file === '.' || $file === '..'){
            continue;
        }
        $file_path = $path . DIRECTORY_SEPARATOR . $file;
        $item ['name'] = $file;
        $item ['path'] = $file_path;
        if (is_dir($file_path)){
            $item ['type'] = 'd';
            $item ['children'] = scan_directory_recursive($file_path, $nesting_level + 1);
        }else {
            $item ['type'] = 'f';
        }
        $result[] = $item;
    }
    return $result;
}

$files_list = scan_directory_recursive('D:\php\install');

$files_list_serialized = serialize($files_list);

echo "Максимальный уровень вложенности: $max_level";
//print_r($files_list);
//print_r($files_list_serialized);

file_put_contents('08.ser', $files_list_serialized);