<?php
// 宣告變數$a為一個空陣列
$a = [];

// 在$a陣列中 塞入三個"值($values)" 分別為a,b,c 預設的"索引($key)"會是0 1 2 如果又塞一個值為d 預設索引也會跟著相應增加 變為$key會有0 1 2 3 4 對應的$values分別為a,b,c,d
$a = ["a", "b", "c"];

/* a陣列 中的$key => $value 對照的分別是
     0 => "a"
     1 => "b"
     2 => "c"
*/
foreach ($a as $key => $value) {
    echo "$key => $value";
}


// 自訂索引的方法

// 宣告變數$b 為一個空陣列
$b = [];
// 有自訂索引的寫法
$b = [
    "我" => "a",
    "是" => "b",
    "索" => "c",
    "引" => "d"
];
// 也相當於
$b["我"] = "a";
$b["是"] = "b";
$b["索"] = "c";
$b["引"] = "d";

// b陣列
/* b陣列 中的$key => $value 對照的分別是
    "我" => "a"
    "是" => "b"
    "索" => "c"
    "引" => "d"
*/
foreach ($b as $key2 => $value2) {
    echo "$key2 => $value2";
}
