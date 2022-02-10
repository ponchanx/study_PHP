<?php

//echo time() . PHP_EOL;

// echo date('Y-m-d l' , time()) . PHP_EOL;  //年月日の表示
// echo date('Y-m-d l') . PHP_EOL;


//特定日時の表示　引数の順序　時、分、秒、月、日、年
// echo date('Y-m-d l', mktime(0, 0, 0, 2, 14, 2022)) . PHP_EOL;

echo date('Y-m-d l', strtotime('2023-04-02')) . PHP_EOL;
echo date('Y-m-d l', strtotime('2023-04-02 +1 day')) . PHP_EOL;
