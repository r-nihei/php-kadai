<?php
// 点数を、変数 score に入れる（0〜100）
$score = 85;

if ( $score >= 100 ) {
    echo "AA";
} elseif ( $score >= 90 ) {
    echo "A";
} elseif ( $score >= 80 ) {
    echo "B";
} elseif ( $score >= 70 ) {
    echo "C";
} elseif ( $score >= 60 ) {
    echo "D";
} else {
    echo "E";
}