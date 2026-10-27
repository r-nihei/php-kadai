<?php
// 1〜100 で、3 の倍数は Fizz、5 の倍数は Buzz、15 の倍数は FizzBuzz、それ以外は数字を出す
for (  $i = 1; $i <= 100; $i++  ) {
    if ( $i % 15 == 0 ) {
        echo "FizzBuzz";
    } elseif ( $i % 5 == 0 ) {
        echo "Buzz";
    } elseif ( $i % 3 == 0 ) {
        echo "Fizz";
    } else {
        echo $i;
    }
    echo "\n";
}
