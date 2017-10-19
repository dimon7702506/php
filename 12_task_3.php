<?php

function delete_dir($dir)
{
    if(!file_exists($dir)){
        echo "Директория не существует" . "<br>";
        return null;
    }
    $files = array_diff(scandir($dir), array('.', '..'));

    //var_dump($files);

    foreach ($files as $file) {
        (is_dir("$dir/$file")) ? delete_dir("$dir/$file") : unlink("$dir/$file");
    }
    return rmdir($dir);
}

if (PHP_OS === "Linux") {
    $dir = '/var/www/homework.com/public_html/tmp/tmp';
} else {
    $dir = 'D:\OSPanel\domains\source\homework\tmp\tmp';
}

if (delete_dir($dir)) {
    echo "Директория успешно удалена";
}else{
    echo "Директория не удалена";
}