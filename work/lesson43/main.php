<?php

$a = [3, 4, 8];
$b = [4, 8, 12];

// $merged = array_merge($a, $b); //連結させる
$merged = [...$a, ...$b];      //同意

// print_r($merged);

// $uniques = array_unique($merged); //重複した要素を取り除き新しい配列で返す
// print_r($uniques);

$diff1 = array_diff($a, $b);    //aにある要素からbにある要素引く
print_r($diff1);

$diff2 = array_diff($b, $a);    //bにある要素からaにある要素引く
print_r($diff2);

$common = array_intersect($a, $b); //共通の要素出す
print_r($common);