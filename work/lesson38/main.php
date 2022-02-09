<?php

$scores = [30, 40, 50];

// array_unshift($scores, 10, 20); //先頭に要素追加
// array_push($scores, 60, 70);    //末尾に要素追加
// $scores[] = 80;   //末尾に追加するには添字なしで代入できる

array_shift($scores); //先頭の要素削除、*一個ずつしかできない
array_pop($scores);   //末尾から一つ削除

print_r($scores);