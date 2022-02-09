<?php

$input = '20200320Item-A  1200';
$input = substr_replace($input, 'Item-B  ', 8, 8); //置換する場合

$date = substr($input, 0, 8); //日付、０から８桁目
$product = substr($input, 8, 8); // 商品名、８文字目から８桁分
// $amount = substr($input, 16, 4); //最後までの場合最後の引数省略可
$amount = substr($input, 16);

echo $date . PHP_EOL;
echo $product . PHP_EOL;
// echo $amount . PHP_EOL; //数字が大きく小数点入れたい時

echo number_format($amount) . PHP_EOL;