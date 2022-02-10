<?php

//新しいファイルを作りそこに書き込む

// $fp = fopen('names.txt', 'w'); // 新規ファイルに書き込むw

// fwrite($fp, "saito\n");

// fclose($fp);




// $fp = fopen('names.txt', 'a');//書き込みを付け足すa

// fwrite($fp, "jiro\n");
// fwrite($fp, "saburo\n");


// $fp = fopen('names.txt', 'r');  //読み込みr
// $contents = fread($fp, filesize('names.txt')); //サイズを指定し一気に読み込むfread
// fclose($fp);
// echo $contents;

$fp = fopen('names.txt', 'r');  
while (($line = fgets($fp)) !== false) { //一行ずつ読み込む
    echo $line;
}
fclose($fp);
