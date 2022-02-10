<?php

$scores = [
    'saito' => 80,
    'hayashi' => 70,
    'kikuchi' => 60,
];

// $keys = array_keys($scores);      //キーだけを抽出
// print_r($keys);    
// $values = array_values($scores);  //値だけを抽出
// print_r($values);

// 特定のキーがあるか調べる
if (array_key_exists('saito', $scores) === true) {
    echo 'saito is here!' . PHP_EOL;
}


// 値が配列の中にあるか調べる
if (in_array(80,$scores) === true) {
    echo '80 is here!' . PHP_EOL;
}

//値を検索して対応するキーを返す
echo array_search(70, $scores) . PHP_EOL;