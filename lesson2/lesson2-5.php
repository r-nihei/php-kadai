<?php
// 年齢を、変数 age に入れる
$age = 6;

if ( $age <= 5 ) {
    echo "無料";
} elseif ( $age <= 12 ) {
    echo "200円";
} elseif ( $age <= 70 ) {
    echo "500円";
} else {
    echo "無料";
}