<?php

// function sum ($a, $b, $c)
function sum (...$numbers)
{
    // return $a + $b + $C;
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}

echo sum(1, 3, 5) .PHP_EOL;
echo sum(4, 2, 5, 1) .PHP_EOL;
