<?php

function sum($a, $b, $c) 
{
//  echo $a + $b + $c . PHP_EOL;
return $a + $b + $c;
echo 'Here!' . PHP_EOL;
}

// sum(100, 200, 300);
// sum(300, 400, 500);

echo sum(100, 200, 300) + sum(300, 400, 500) . PHP_EOL;