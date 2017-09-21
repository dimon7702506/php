<?php

$files_list_serialized = file_get_contents('08.ser');
$files_list_unserialized = unserialize($files_list_serialized);
print_r($files_list_unserialized);