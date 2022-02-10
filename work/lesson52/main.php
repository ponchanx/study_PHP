<?php

// ディレクトリにファイルを作る
// file_put_contents('data/saito.txt', "saito\n");
// file_put_contents('data/jiro.txt', "jiro\n");

//ディレクトリを読み取ってファイルの一覧を表示
// $dp = opendir('data');
// while (($item = readdir($dp)) !== false) {
//     if ($item === '.' || $item === '..') {
//         continue;
//     }
//   echo $item . PHP_EOL;
// }

// foreach (glob('data/*.txt') as $item) {
//    echo $item . PHP_EOL;
//    echo basename($item) . PHP_EOL;
// }

//存在、読み書き可能かチェックできる

// if (file_exists('data/saburo.txt') === false) {
if (!file_exists('data/saburo.txt')) {
    echo 'saburo not here!' .PHP_EOL;
    exit;                                //処理を止める命令
}

if (file_exists('data') === true) {    //ファイルの有無
    echo 'data exists!' . PHP_EOL;
}
if (is_writable('data/saito.txt') === true) {  //書き込み可能か
    echo 'saito is writable!' . PHP_EOL;
}

if (is_readable('data/saito.txt') === true) {  //読み込み可能か
    echo 'saito is readable!' . PHP_EOL;
}