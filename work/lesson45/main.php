<?php

$numbers = range(1, 10);

$evenNumbers = array_filter(
 $numbers,
//  function ($n) {
    //  if ($n % 2 === 0){       //数字を２で割って余り0、つまり偶数
    //      return true;
    //  } else {
    //      return false;
    //  }
    //     return $n % 2 === 0;  //でも可、もしくは
    //  }
 fn($n) => $n % 2 === 0
);

print_r($evenNumbers);
