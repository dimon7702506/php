<?php

function getNumCalls()
{
    static $calls = 0;

    $calls++;

    return$calls;
}

for ($i = 0; $i < 10; $i++) {
    getNumCalls();
}

echo getNumCalls();
var_dump($calls);