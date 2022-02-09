<?php

// $d = [2020, 11, 15];
// echo "$d[0]-$d[1]-$d[2]" . PHP_EOL;
// echo implode('-', $d) . PHP_EOL; // 単純に文字のr連結

$t = '17:32:45'; //時分秒を配列の要素にしたかった場合
print_r(explode(':', $t));