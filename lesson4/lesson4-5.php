<?php
// 文字列が回文（前から読んでも後ろから読んでも同じ）かどうかを判別する
$word = "level";

$reverse = "";   // 後ろから読んだ文字を、つないでためていく箱

for ( $i = strlen($word) - 1; 0 <= $i; $i-- ) {
    $reverse = $reverse . $word[$i]; 
}

if ( $word === $reverse ) {
    echo "回文です";
} else {
    echo "回文ではありません";
}
