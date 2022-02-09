<?php

$scores = [30, 40, 50, 60, 70];
// $partial = array_slice($scores, 2, 3); //配列の途中を切り出す
// $partial = array_slice($scores, 2);   //最後まで指定時は最後の引数省略可
$partial = array_slice($scores, -2);    //-も使用可

print_r($scores);
print_r($partial);