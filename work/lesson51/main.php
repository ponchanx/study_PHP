<?php

$contents = "saito\njiro\nsaburo\n";

//fopenを使わずファイル操作をする
// file_put_contents('names.txt', $contents);


//fopenを使わず読み込む
// $contents = file_get_contents('names.txt');
// echo $contents;

//一行ずつ配列の要素として「読み込み
// $lines = file('names.txt');
$lines = file('names.txt', FILE_IGNORE_NEW_LINES); //末尾の改行を消す
var_dump($lines);
