<?php


function delete_dir($dir)
{
    $files = array_diff(scandir($dir), array('.', '..'));
    foreach ($files as $file) {
        (is_dir("$dir/$file")) ? delete_dir("$dir/$file") : unlink("$dir/$file");
    }
    return rmdir($dir);
}

function delete_dir1($path)
{
    if (!file_exists($path)){
        return false;
    }
    $files = scandir($path);

    foreach ($files as $file){

        if ($file === '.' || $file === '..'){
            continue;
        }

        $file_path = $path . DIRECTORY_SEPARATOR . $file;

        if (is_dir($file_path)) {
            delete_dir($file_path);
        }else{
            echo $file_path;
            unlink($file_path);
        }

        if (rmdir($path)) {
            return true;
        } else {
            return false;
        }
    }
}

//if (PHP_OS === "Linux") {
    $dir = '/var/www/homework.com/public_html/tmp/tmp123';
//} else {
//    $dir = '';
//}

delete_dir($dir);