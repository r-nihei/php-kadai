<?php
// 判定したい整数を、変数 num に入れる
$num = 5;

if ( $num > 0 ) {
    echo "正の数";
} elseif ( $num < 0 ) {
    echo "負の数";
} else {
    echo "ゼロ";
}