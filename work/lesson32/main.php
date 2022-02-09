<?php

$input = ' dot_saito  ';//文字数を調べる
$input = trim($input);//ユーザーから受け取った空白を埋める

// echo strlen($input) .PHP_EOL;
// echo strpos($input, '_') . PHP_EOL;//_の有無を探す使ってはいけないもの

$input = str_replace('_', '-', $input);  //_を-に変える（使ってはいけないものを変える）
echo $input . PHP_EOL;