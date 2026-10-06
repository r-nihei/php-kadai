<?php
// 3人の情報を配列 people に入れる（1人ぶんは 名前・年齢・職業 の key と value の組）
$people = [
    ["name" => "佐藤", "age" => 36, "job" => "営業"],
    ["name" => "田中", "age" => 23, "job" => "事務"],
    ["name" => "吉田", "age" => 54, "job" => "社長"]
];
// 添字1番（2人目＝田中さん）の "age" の中身を画面に出す
echo $people[1]["age"];
?>