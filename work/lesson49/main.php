<?php

$date = [
    ['name' => 'saito', 'score'   => 80],
    ['name' => 'kikuchi', 'score' => 60],
    ['name' => 'hayashi', 'score' => 70],
    ['name' => 'tamachi', 'score' => 60],
];
//データから、スコア、キーを抜きとっってくれる
$scores = array_column($date,'score');
$name = array_column($date,'name');

// print_r($scores);
// print_r($name);

//スコア順、アルファベット順、それらの処理を返してくれる
// array_multisort(
//     $scores,
//     $name,
//     $date,
// );

array_multisort(
    $scores, SORT_DESC, SORT_NUMERIC,  //大きいスコア順
    $name, SORT_DESC, SORT_STRING,     //アルファベット逆順
    $date,
);

print_r($date);



