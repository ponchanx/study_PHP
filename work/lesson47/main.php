<?php

$scores = [
    'saito' => 80,
    'hayashi' => 70,
    'kikuchi' => 60,
];

// sort($scores);       //小さい順だが、キーが削除され連番になる
// print_r($scores);
// rsort($scores);      //大きい順 キーが削除され連番になる
// print_r($scores);

// asort($scores);       //キーを保持したままソートする。aをつける
// print_r($scores);
// arsort($scores);      
// print_r($scores);

ksort($scores);       //キーをソートする場合、kをつける
print_r($scores);
krsort($scores);      
print_r($scores);