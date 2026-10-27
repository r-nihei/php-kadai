<?php
// 1〜100 のうち、偶数だけを足した合計を出す
$sum = 0;

for ( $i = 1; $i <= 100; $i++ ) {
    if ( $i % 2 == 0 ) {
        $sum = $sum + $i;
    }
}

echo $sum;