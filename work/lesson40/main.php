<?php

$scores = [30, 40, 50, 60, 70, 80];

// array_splice($scores, 2, 3);  //指定の要素を切り抜いて、そのまま出す
// array_splice($scores, 2, 3, 100); //切り抜き後挿入
array_splice($scores, 2, 0, [100, 101,]); //削除数0にして複数挿入可

print_r($scores);

