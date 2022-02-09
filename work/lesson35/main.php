<?php

$input = 'Call us at 03-3001-1256 or 03-3015-3222';
// 電話番号を探す時
// 検索したいパターン、検索したい文字列、検索結果を格納

$pattern = '/\d{2}-\d{4}-\d{4}/';
// 正規表現　数値が２桁分　４桁分　４桁分の表現

// preg_match($pattern, $input, $matches); // 最初のマッチした分だけ
// preg_match_all($pattern, $input, $matches); // マッチした分全て
// print_r($matches);


$input = preg_replace($pattern, '**-****-****', $input);
//伏字にしたい場合
echo $input . PHP_EOL;


