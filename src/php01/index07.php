<?php

$people = [
    ["Taro", 25, "men"],
    ["Jiro", 20, "men"],
    ["Hanako", 16, "womwn"]
];

foreach($people as $a){
    echo $a[0] . "(" . $a[1] . "歳" . $a[2] . ")";
}