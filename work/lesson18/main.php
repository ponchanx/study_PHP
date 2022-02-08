<?php

function showAd($message = 'Ad') //仮引数
{
    echo '----------' . PHP_EOL;
    echo '---- ' . $message . ' ----' . PHP_EOL;
    echo '----------' . PHP_EOL;
}

showAd('Header Ad'); // 実引数
echo 'Tom is Great!!' . PHP_EOL;
echo 'Bob is Great!!' . PHP_EOL;
// showAd('Ad');
showAd();
echo 'Steave is Great!!' . PHP_EOL;
echo 'Bob is Great!!' . PHP_EOL;
showAd('Footer Ad');
