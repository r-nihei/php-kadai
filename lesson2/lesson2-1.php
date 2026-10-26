<?php
// 変数 A と B に数を入れる
$A = 10;
$B = 7;

// A と B を比べて、大きいほうの変数名を出す
if ($A > $B) {
    echo "A";
} elseif ($A < $B) {
    echo "B";
} else {
    // 同じときは「同じ」と出す
    echo "同じ";
}