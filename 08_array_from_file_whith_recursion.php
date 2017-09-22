<?php

$max_level = 0;

function print_files_list(array $f_lists)
{
    global $max_level;

    foreach ($f_lists as $f_list) {
        $str = null;
        foreach ($f_list as $key => $val) {
            if ($key == 'type'){
                if ($val == 'f') {
                    $str = "<div class = 'file'>";
                }else {
                    $str = "<div class = 'dir'>";
                }
            }elseif ($key == 'level'){
                $spaces = str_pad(' ', $val * 2);
                if ($max_level < $val){
                    $max_level = $val;
                }
            }elseif ($key == 'name'){
                $str = $str . "$spaces" . $val;
            }elseif ($key == 'path'){
                echo "<pre>" . $str . " (" . $val . ")" . "</pre></div>";
             }elseif ($key = 'children') {
                print_files_list($val);
            }
        }
    }
}

$files_list_serialized = file_get_contents('08.ser');
$files_list = unserialize($files_list_serialized);


echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">";
echo "<html>";
echo "<head>";
echo "</head>";
echo "<body>";
echo "<div class='container'>";

print_files_list($files_list);

echo "</div>";
echo "</body>";
echo "</html>";

echo "Максимальный уровень вложенности: $max_level";