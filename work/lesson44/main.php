<?php

$prices = [100, 200, 300];

// 要素に10％の税込みで配列がほしたっかた場合
$newprices =array_map(
    // function ($n) { return $n * 1.1; },
    fn($n) => $n * 1.1, //returnで返すだけならこうも書ける
    $prices
);

print_r($newprices);