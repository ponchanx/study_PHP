<?php

// $scores = array_fill(0, 5, 10); //0のインデックスから5個分を10の値で埋める
// $scores = range(1,10);             //1~10まで値を使って配列
$scores = range(1, 10, 2);         //1~10まで値を2刻みで配列

print_r($scores);

echo array_sum($scores) . PHP_EOL;  //集計
echo max($scores) . PHP_EOL;        //最大値
echo min($scores) . PHP_EOL;        //最初値
       
//平均を一発で出せないので、合計出して、要素の個数で割る
echo array_sum($scores) / count($scores) . PHP_EOL;

