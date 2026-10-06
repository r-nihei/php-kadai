<?php
// りんごの値段（1つ200円）と個数（3つ）を変数に入れる
$apple_price = 200;
$apple_count = 3;
// みかんの値段（1つ100円）と個数（4つ）を変数に入れる
$orange_price = 100;
$orange_count = 4;
// 値段×個数をそれぞれ計算して足し、合計を変数 total に入れる
$total = $apple_price * $apple_count + $orange_price * $orange_count;
// 合計を画面に出す
echo $total;
?>