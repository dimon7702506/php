<?php

function getLines($file) {
    $f = fopen($file, 'r');
    while ($line = fgets($f)) {
        yield $line;
    }
        fclose($f);
}

foreach (getLines("12_file.txt") as $n => $line) {
    echo $line . "<br>";
}