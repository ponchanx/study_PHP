<?php

// $scores = [
//     'saito'   => 80,
//     'hayashi' => 70,
//     'kikuchi' => 60,
// ];

$date = [
    ['name' => 'saito', 'score'   => 80],
    ['name' => 'kikuchi', 'score' => 60],
    ['name' => 'hayashi', 'score' => 70],
    ['name' => 'tamachi', 'score' => 60],
];
//複数要素があり、何を比較して並べ替えるか自分で定義できるusort
//usortは１つの項目しか比較できない。スコアが同じでアルファベット順とかできない
usort(
    $date,
    function ($a, $b) {
        if ($a['score'] === $b['score']) {
            return 0;//２つの値が同じで順番を変えたくない時は0を返せという仕様になっている
        }
        return $a ['score'] > $b['score'] ? 1 :-1;
    }
);

print_r($date);